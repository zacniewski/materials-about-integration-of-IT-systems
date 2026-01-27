# Wykład 7: Docker Compose – orkiestracja wielu usług

## Czas trwania: 2 godziny

### Agenda:
1. Dlaczego Docker Compose? Definiowanie aplikacji wielokontenerowych.
2. Składnia pliku `docker-compose.yml`.
3. Sieci wewnętrzne Docker (Docker Networks) i komunikacja między kontenerami.
4. Zarządzanie kolejnością uruchamiania usług (depends_on, healthchecks).
5. Wykorzystanie plików `.env` w Docker Compose.
6. Polecenia CLI: up, down, ps, build, restart.

### Treść:
Większość rzeczywistych aplikacji składa się z wielu usług (np. backend, frontend, baza danych, cache). Docker Compose pozwala na zdefiniowanie całej infrastruktury w jednym pliku konfiguracyjnym, co umożliwia uruchomienie kompletnego stosu technologicznego jednym poleceniem. Jest to fundament lokalnej integracji systemów.
