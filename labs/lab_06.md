# Laboratorium 6: Projekt końcowy – zintegrowany system z CI/CD

## Czas trwania: 10 godzin

### Cel:
Samodzielne zaprojektowanie i wdrożenie kompletnego systemu informatycznego w Django, zintegrowanego przy użyciu poznanych technologii (Git, Docker, Render.com, GitHub Actions).

### Wybór projektu (Scenariusze) i szczegółowe wytyczne:

#### 1. Aplikacja typu 'Blog' (PaaS - Render.com)
**Cel:** Stworzenie systemu publikacji postów z bazą danych PostgreSQL.

*   **Modele:** `Post(title, content, author, created_at, category)`.
*   **Struktura:**
    ```text
    blog_project/
    ├── posts/              # Aplikacja obsługująca posty
    │   ├── models.py       # Definicja Post i Category
    │   ├── views.py        # Lista postów i szczegóły
    │   └── templates/      # Szablony HTML (list.html, detail.html)
    ├── core/               # Główne ustawienia
    └── requirements.txt    # django, gunicorn, whitenoise, dj-database-url, psycopg2-binary
    ```
*   **Kluczowe kroki:**
    1.  Zaimplementuj modele i wykonaj migracje lokalnie.
    2.  Stwórz prosty interfejs (widoki Generyczne `ListView`, `DetailView`).
    3.  Skonfiguruj `settings.py` pod Render.com (zgodnie z Lab 2).
    4.  Wdróż na Render i skonfiguruj bazę PostgreSQL.

#### 2. Aplikacja typu 'To-Do' (PaaS - Render.com)
**Cel:** Zarządzanie listą zadań z autoryzacją użytkowników.

*   **Modele:** `Task(user, title, completed, created_at)`.
*   **Logika:** Każdy użytkownik musi być zalogowany, aby widzieć swoje zadania (`LoginRequiredMixin`).
*   **Tabela funkcjonalności:**
    | Funkcja | Metoda HTTP | Opis |
    | :--- | :--- | :--- |
    | Lista zadań | GET | Wyświetla tylko zadania zalogowanego użytkownika |
    | Dodaj zadanie | POST | Tworzy nowe zadanie przypisane do `request.user` |
    | Zmień status | POST | Przełącza flagę `completed` |

#### 3. Aplikacja REST API (PaaS - Render.com)
**Cel:** Udostępnienie danych w formacie JSON przy użyciu czystego Django (`JsonResponse`).

*   **Wymagane biblioteki:** `django-cors-headers`.
*   **Przykład widoku API:**
    ```python
    from django.http import JsonResponse
    from .models import Item

    def item_list(request):
        items = Item.objects.all().values()
        return JsonResponse(list(items), safe=False)
    ```
*   **Kluczowe kroki:**
    1.  Zdefiniuj modele w `models.py`.
    2.  Stwórz widok zwracający `JsonResponse` z danymi modelu (użyj `.values()`).
    3.  Skonfiguruj ścieżki w `urls.py`.
    4.  Przetestuj endpointy w przeglądarce lub narzędziu Postman.

#### 4. Aplikacja w środowisku Dockera (np. Pogodowa)
**Cel:** Pobieranie i wyświetlanie danych z zewnętrznego API w kontenerze.

*   **Inspiracja:** Wykorzystaj skrypt `examples/open_meteo.py` lub `examples/rest_countries.py`.
*   **Struktura aplikacji:**
    ```text
    weather_app/
    ├── app.py              # Logika pobierania danych (requests.get)
    ├── templates/          # Wyświetlanie wyników
    ├── Dockerfile          # Instrukcja budowania obrazu
    └── docker-compose.yml  # Orkiestracja (np. aplikacja + Redis do cache)
    ```
*   **Przykładowy `docker-compose.yml` dla tego zadania:**
    ```yaml
    services:
      web:
        build: .
        ports:
          - "8000:8000"
        environment:
          - API_KEY=${API_KEY}
    ```

### Zadania i kroki realizacji (Checklista):

#### Faza 1: Planowanie i Inicjalizacja
- [ ] Zdefiniowanie tematu i zakresu funkcjonalnego.
- [ ] Utworzenie repozytorium na GitHub i lokalna inicjalizacja projektu Django.
- [ ] Przygotowanie pliku README.md z opisem projektu.

#### Faza 2: Implementacja i Konteneryzacja
- [ ] Stworzenie logiki aplikacji (Modele, Widoki, Szablony/JSON).
- [ ] Przygotowanie pliku `requirements.txt`.
- [ ] Stworzenie poprawnego pliku `Dockerfile` (zgodnie z Lab 3).
- [ ] Stworzenie pliku `docker-compose.yml` dla środowiska deweloperskiego (zgodnie z Lab 4).

#### Faza 3: CI/CD i Wdrożenie (dla projektów 1-3)
- [ ] Konfiguracja bazy danych PostgreSQL na Render.com.
- [ ] Skonfigurowanie zmiennych środowiskowych w panelu Render.
- [ ] Przygotowanie workflow GitHub Actions (Testy + Auto-deploy).
- [ ] Pierwsze udane wdrożenie produkcyjne.

#### Faza 4: Dokumentacja i Testy
- [ ] Napisanie testów jednostkowych pokrywających kluczowe funkcje.
- [ ] Dokumentacja w README: jak uruchomić projekt lokalnie (Docker) i gdzie jest dostępny w chmurze.

### Wymagania na zaliczenie:
- Repozytorium na GitHub z pełną historią zmian (znaczące commity).
- Działająca aplikacja (link do Render.com lub instrukcja `docker-compose up`).
- Poprawnie skonfigurowany potok CI/CD (zielone buildy).
- Prezentacja projektu i odpowiedzi na pytania dotyczące integracji elementów systemu.
