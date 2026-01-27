# Wykład 6: Zarządzanie obrazami i kontenerami Docker

## Czas trwania: 2 godziny

### Agenda:
1. Budowanie własnych obrazów – struktura pliku `Dockerfile`.
2. Warstwy obrazu i mechanizm cache'owania.
3. Optymalizacja obrazów (Multi-stage builds, obrazy typu alpine).
4. Zarządzanie kontenerami: exec, logs, inspect, stop, rm.
5. Przekierowanie portów i mapowanie wolumenów.
6. Dobre praktyki tworzenia plików Dockerfile.

### Treść:

#### 1. Budowanie własnych obrazów – Dockerfile
`Dockerfile` to plik tekstowy zawierający instrukcje potrzebne do zbudowania obrazu.

**Podstawowe instrukcje:**
*   `FROM`: Określa obraz bazowy (np. `node:18`).
*   `WORKDIR`: Ustawia katalog roboczy wewnątrz kontenera.
*   `COPY`: Kopiuje pliki z hosta do kontenera.
*   `RUN`: Wykonuje komendy w trakcie budowania (np. instalacja pakietów).
*   `CMD`: Określa domyślną komendę uruchamianą przy starcie kontenera.
*   `EXPOSE`: Informuje o porcie, na którym nasłuchuje aplikacja.

**Przykład:**
```dockerfile
FROM node:18-alpine
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
EXPOSE 3000
CMD ["npm", "start"]
```

#### 2. Warstwy obrazu i cache
Obraz Docker składa się z warstw tylko do odczytu. Każda instrukcja w `Dockerfile` tworzy nową warstwę.
*   **Cache:** Docker zapamiętuje wyniki instrukcji. Jeśli instrukcja i jej wejście (np. pliki w `COPY`) nie zmieniły się, Docker użyje poprzednio zbudowanej warstwy.
*   **Ważne:** Należy kopiować pliki zależności (np. `package.json`) przed resztą kodu, aby zmiany w kodzie nie unieważniały cache'u instalacji bibliotek.

#### 3. Optymalizacja obrazów
Mniejszy obraz to szybsze pobieranie i mniejsza powierzchnia ataku.

*   **Multi-stage builds:** Pozwalają na użycie jednego obrazu do budowania (np. z kompilatorem) i drugiego, mniejszego, do uruchamiania aplikacji.
*   **Obrazy Alpine:** Bardzo małe dystrybucje Linuxa (kilkanaście MB), dedykowane dla kontenerów.

```dockerfile
# Stage 1: Build
FROM node:18 AS build-stage
WORKDIR /app
COPY . .
RUN npm run build

# Stage 2: Production
FROM nginx:stable-alpine
COPY --from=build-stage /app/dist /usr/share/nginx/html
```

#### 4. Zarządzanie kontenerami
Komendy do pracy z działającymi kontenerami:
*   `docker logs <id>` – podgląd wyjścia standardowego aplikacji.
*   `docker exec -it <id> sh` – wejście do konsoli działającego kontenera.
*   `docker inspect <id>` – szczegółowe informacje w formacie JSON.
*   `docker rm -f <id>` – wymuszone usunięcie kontenera.

#### 5. Przekierowanie portów i wolumeny
Kontenery działają w izolowanej sieci. Aby uzyskać do nich dostęp, stosujemy mapowanie:

*   **Porty:** `-p <port_hosta>:<port_kontenera>` (np. `-p 8080:80`).
*   **Wolumeny:** Służą do trwałości danych lub synchronizacji kodu w trakcie developmentu.
    *   `-v /host/path:/container/path`

#### 6. Dobre praktyki (Best Practices)
1.  **Jeden proces na kontener.**
2.  **Używaj `.dockerignore`:** Aby nie kopiować `node_modules`, `.git` czy logów do obrazu.
3.  **Minimalizuj warstwy:** Łącz komendy `RUN` (np. `apt-get update && apt-get install -y ...`).
4.  **Nie używaj `latest`:** Zawsze podawaj konkretną wersję obrazu bazowego dla powtarzalności buildów.
5.  **Uruchamiaj jako non-root:** Dla poprawy bezpieczeństwa.
