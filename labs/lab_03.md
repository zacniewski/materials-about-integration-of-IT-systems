# Laboratorium 3: Budowanie obrazów i konteneryzacja aplikacji

## Czas trwania: 10 godzin

### Cel:
Opanowanie narzędzia Docker w zakresie tworzenia definicji obrazów oraz zarządzania kontenerami lokalnie.

### Zadania i ćwiczenia:
1. **Podstawy Docker CLI (2h):**
   - Uruchamianie gotowych obrazów z Docker Hub (np. nginx, hello-world).
   - Praca z kontenerem w trybie interaktywnym i w tle (`-it`, `-d`).
   - Inspekcja logów i statystyk kontenera.

2. **Tworzenie własnego Dockerfile (4h):**
   - Wybór obrazu bazowego (base image).
   - Kopiowanie kodu aplikacji do kontenera.
   - Definiowanie instrukcji `RUN`, `CMD`, `ENTRYPOINT`.
   - Zarządzanie portami (`EXPOSE`) i zmiennymi środowiskowymi (`ENV`).

3. **Optymalizacja i Multi-stage builds (2h):**
   - Porównanie rozmiarów obrazów (standardowe vs alpine).
   - Tworzenie pliku Dockerfile z podziałem na etap budowania (build) i etap uruchamiania (runtime).
   - Użycie `.dockerignore`.

4. **Zarządzanie zasobami (2h):**
   - Usuwanie niepotrzebnych obrazów i kontenerów.
   - Praca z wolumenami danych (persystencja lokalna).

### Wymagania na zaliczenie:
- Przygotowanie poprawnego pliku Dockerfile dla wybranej aplikacji.
- Zbudowanie obrazu i pomyślne uruchomienie kontenera lokalnie.
- Udokumentowanie różnicy w rozmiarze obrazu przed i po optymalizacji.
