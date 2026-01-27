# Laboratorium 5: Hybrydowa integracja: lokalne kontenery i PaaS

## Czas trwania: 10 godzin

### Cel:
Nauka łączenia zasobów lokalnych z usługami chmurowymi oraz przygotowanie aplikacji do pełnej konteneryzacji w chmurze.

### Zadania i ćwiczenia:
1. **Lokalna aplikacja w Dockerze + Chmurowa Baza Danych (4h):**
   - Uruchomienie aplikacji w lokalnym kontenerze Docker.
   - Skonfigurowanie połączenia z bazą danych działającą na platformie PaaS (np. MongoDB Atlas lub Render DB).
   - Zarządzanie opóźnieniami (latency) i bezpieczeństwem połączenia.

2. **Deploy kontenera na platformę PaaS (4h):**
   - Zamiast wdrażania kodu źródłowego, wdrażamy obraz Docker.
   - Wykorzystanie Container Registry (np. Docker Hub lub rejestr dostawcy PaaS).
   - Konfiguracja platformy do automatycznego restartu po aktualizacji obrazu.

3. **Debugging i logi w środowisku hybrydowym (2h):**
   - Śledzenie logów aplikacji działającej w chmurze.
   - Zdalna inspekcja stanu aplikacji.

### Wymagania na zaliczenie:
- Działająca aplikacja na platformie PaaS, uruchomiona jako kontener Docker.
- Połączenie aplikacji (lokalnej lub chmurowej) z zewnętrzną usługą bazy danych.
- Opis procesu przesyłania obrazu do rejestru.
