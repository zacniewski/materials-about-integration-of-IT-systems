# Laboratorium 4: Konteneryzacja aplikacji Django za pomocą Dockera

## Czas trwania: 6 godzin

### Cel:
Przygotowanie aplikacji do pracy w środowisku izolowanym przy użyciu Dockera. Konfiguracja `Dockerfile` oraz `docker-compose`.

### Zadania i ćwiczenia:

1. **Przygotowanie środowiska (1h):**
   - Stwórz gałąź `feature/dockerization`.
   - Upewnij się, że masz plik `requirements.txt` (`pip freeze > requirements.txt`).

2. **Tworzenie Dockerfile (2h):**
   - Przygotuj plik `Dockerfile` dla aplikacji Django (bazujący na `python:3.11-slim`).
   - Zbuduj obraz: `docker build -t django-app .`.
   - **Commit:** "Add Dockerfile for Django application".

3. **Orkiestracja z Docker Compose (3h):**
   - Stwórz plik `docker-compose.yml` zawierający serwis `web` (Twoja aplikacja) oraz `db` (PostgreSQL).
   - Skonfiguruj zmienne środowiskowe dla bazy danych.
   - Uruchom cały stos: `docker-compose up`.
   - **Commit:** "Add docker-compose for app and database orchestration".

### Lista kontrolna (Checklist):
- [ ] Czy obraz Dockera buduje się bez błędów?
- [ ] Czy aplikacja poprawnie łączy się z bazą danych PostgreSQL wewnątrz kontenera?
- [ ] Czy wolumeny dla bazy danych są poprawnie skonfigurowane (trwałość danych)?

### Wymagania na zaliczenie:
- Pliki `Dockerfile` i `docker-compose.yml` w repozytorium.
- Umiejętność uruchomienia projektu jedną komendą `docker-compose up`.
- Historia zmian na dedykowanej gałęzi.
