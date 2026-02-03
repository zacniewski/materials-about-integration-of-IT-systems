# Laboratorium 6: Wdrażanie aplikacji Django na platformę Render.com

## Czas trwania: 6 godzin

### Cel:
Zrozumienie modelu Platform as a Service (PaaS) oraz nabycie umiejętności wdrażania i konfiguracji aplikacji Django na platformie Render.com.

### Zadania i ćwiczenia:

**Architektura aplikacji na PaaS (Render.com):**
```mermaid
graph TD
    User((Użytkownik)) --> Internet[Internet]
    Internet --> Render[Render.com Load Balancer]
    Render --> App[Django App / Gunicorn]
    App --> Static[WhiteNoise / Pliki statyczne]
    App --> DB[(PostgreSQL Database)]
    App --> Env[Zmienne środowiskowe]
```

1. **Dostosowanie Django do standardów PaaS (2h):**
   - Instalacja `gunicorn` (serwer produkcyjny) oraz `whitenoise` (obsługa plików statycznych).
   - Konfiguracja `ALLOWED_HOSTS` w `settings.py`.
   - Stworzenie pliku `requirements.txt` (`pip freeze > requirements.txt`).

**Przykładowa konfiguracja `settings.py` dla PaaS:**
```python
import os
import dj_database_url

SECRET_KEY = os.environ.get('SECRET_KEY', 'django-insecure-default')
DEBUG = os.environ.get('DEBUG', 'True') == 'True'
ALLOWED_HOSTS = [os.environ.get('RENDER_EXTERNAL_HOSTNAME', 'localhost')]

# WhiteNoise
MIDDLEWARE = [
    'django.middleware.security.SecurityMiddleware',
    'whitenoise.middleware.WhiteNoiseMiddleware',
    # ...
]

# Database
DATABASES = {
    'default': dj_database_url.config(
        default='sqlite:///db.sqlite3',
        conn_max_age=600
    )
}
```

2. **Przygotowanie do wdrożenia na Render.com (3h):**
   - Założenie konta na platformie [Render.com](https://render.com).
   - Utworzenie nowej usługi "Web Service".
   - Połączenie repozytorium GitHub z Render.
   - Konfiguracja "Build Command": `pip install -r requirements.txt && python manage.py collectstatic --noinput`.
   - Konfiguracja "Start Command": `gunicorn core.wsgi:application`.

3. **Bezpieczeństwo i zmienne środowiskowe (2h):**
   - Przeniesienie `SECRET_KEY` i `DEBUG` do zmiennych środowiskowych (moduł `os` lub `python-dotenv`).
   - Konfiguracja zmiennych w panelu Render (Dashboard -> Env Vars).
   - Ukrycie wrażliwych danych w repozytorium.

| Klucz | Przykładowa Wartość | Opis |
| :--- | :--- | :--- |
| `SECRET_KEY` | `twój-bardzo-długi-klucz` | Klucz kryptograficzny Django |
| `DEBUG` | `False` | Tryb debugowania (zawsze False na produkcji) |
| `DATABASE_URL` | `postgres://user:pass@host:port/db` | URL do bazy danych PostgreSQL |

4. **Integracja z bazą danych PostgreSQL (3h):**
   - Utworzenie darmowej bazy danych PostgreSQL na Render.
   - Instalacja `dj-database-url` oraz `psycopg2-binary`.
   - Konfiguracja połączenia z bazą danych w `settings.py` przy użyciu zmiennej środowiskowej `DATABASE_URL`.
   - Wykonanie migracji w chmurze (automatycznie przy starcie lub ręcznie).

### Lista kontrolna (Checklist):
- [ ] Czy zainstalowano i skonfigurowano `gunicorn` oraz `whitenoise`?
- [ ] Czy plik `requirements.txt` jest aktualny?
- [ ] Czy aplikacja jest widoczna pod publicznym adresem `*.onrender.com`?
- [ ] Czy `DEBUG` jest ustawiony na `False` w środowisku produkcyjnym?
- [ ] Czy baza danych PostgreSQL na Render jest połączona z aplikacją?

### Wymagania na zaliczenie:
- Działający link do publicznie dostępnej aplikacji Django na Render.com.
- Udowodnienie poprawnej integracji z bazą danych (np. działający panel admina w chmurze).
- Poprawna konfiguracja zmiennych środowiskowych.
