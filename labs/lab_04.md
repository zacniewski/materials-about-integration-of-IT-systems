# Laboratorium 4: Wielokontenerowe aplikacje z bazami danych

## Czas trwania: 10 godzin

### Cel:
Integracja wielu usług w ramach jednego projektu przy użyciu Docker Compose.

### Zadania i ćwiczenia:
1. **Definiowanie usług w Docker Compose (3h):**
   - Stworzenie pliku `docker-compose.yml`.
   - Konfiguracja dwóch usług: aplikacji (web) oraz bazy danych (db).
   - Wykorzystanie gotowych obrazów bazodanowych (np. PostgreSQL, MariaDB).

2. **Komunikacja między kontenerami (2h):**
   - Wykorzystanie wewnętrznych sieci Docker.
   - Odwoływanie się do usług po nazwie (service name as hostname).

3. **Zapewnienie trwałości danych (3h):**
   - Konfiguracja wolumenów w Docker Compose.
   - Weryfikacja zachowania danych po zniszczeniu i ponownym uruchomieniu kontenerów (`docker-compose down && docker-compose up`).

4. **Zaawansowana orkiestracja lokalna (2h):**
   - Uzależnianie startu aplikacji od gotowości bazy danych (`depends_on`, `healthcheck`).
   - Zarządzanie zmiennymi środowiskowymi poprzez plik `.env`.

### Wymagania na zaliczenie:
- Kompletny, działający projekt składający się z co najmniej dwóch usług uruchamianych poleceniem `docker-compose up`.
- Poprawne działanie bazy danych z zachowaniem stanu (persystencja).
- Brak zakodowanych na sztywno (hardcoded) haseł w pliku YAML.
