# Laboratorium 2: Lokalna aplikacja Django – System Blogowy (Praca z gałęziami)

## Czas trwania: 6 godzin

### Cel:
Stworzenie lokalnej wersji aplikacji 'Blog' w Django oraz opanowanie pracy na gałęziach (Feature Branch Workflow) w systemie Git.

### Zadania i ćwiczenia:

1. **Praca na gałęziach (Git Workflow) (1h):**
   - Przed rozpoczęciem pracy stwórz nową gałąź: `git checkout -b feature/blog-app`.
   - Wszystkie zmiany w tym laboratorium powinny trafiać na tę gałąź.

2. **Inicjalizacja aplikacji:**
   - Stworzenie nowej aplikacji: `python manage.py startapp blog`.
   - Rejestracja aplikacji w `settings.py`.
   - **Commit:** "Add blog app to projects and settings".

3. **Definicja modeli (2h):**
   - Stworzenie modelu `Post` z polami: `title`, `content`, `author` (ForeignKey do User), `created_at`, `published_at`.
   - Implementacja metody `__str__` dla modelu.
   - **Commit:** "Define Post model".

**Kod źródłowy `blog/models.py`:**
```python
from django.db import models
from django.contrib.auth.models import User
from django.utils import timezone

class Post(models.Model):
    title = models.CharField(max_length=200)
    content = models.TextField()
    author = models.ForeignKey(User, on_delete=models.CASCADE)
    created_at = models.DateTimeField(auto_now_add=True)
    published_at = models.DateTimeField(default=timezone.now)

    def __str__(self):
        return self.title
```

4. **Migracje i Panel Admina (1h):**
   - Wykonanie migracji: `python manage.py makemigrations` i `python manage.py migrate`.
   - Rejestracja modelu w `blog/admin.py`.
   - Tworzenie superużytkownika (`createsuperuser`) i dodanie testowych postów.
   - **Commit:** "Initialize database migrations and admin registration".

5. **Widoki i Szablony (2h):**
   - Stworzenie widoku listy postów (`ListView`) i szczegółów postu (`DetailView`).
   - Konfiguracja URL-i w `blog/urls.py` oraz głównym `urls.py`.
   - Tworzenie folderu `templates/blog/` i plików HTML.
   - **Commit:** "Implement basic views and templates for blog posts".

6. **Zarządzanie zmianami i Merge (2h):**
   - Sprawdź status swojej pracy: `git status`.
   - Wypchnij gałąź na GitHub: `git push origin feature/blog-app`.
   - Stwórz **Pull Request** na GitHubie.
   - Zmerguj gałąź `feature/blog-app` do `main` (lokalnie lub przez GitHub).

### Lista kontrolna (Checklist):
- [ ] Czy pracowałeś na osobnej gałęzi `feature/blog-app`?
- [ ] Czy każdy etap pracy kończył się sensownym commitem?
- [ ] Czy aplikacja `blog` została dodana do `INSTALLED_APPS`?
- [ ] Czy migracje zostały wykonane pomyślnie?
- [ ] Czy strona główna wyświetla listę postów pobranych z bazy danych?
- [ ] Czy gałąź została poprawnie scalona z `main`?

### Wymagania na zaliczenie:
- Działająca lokalnie aplikacja bloga.
- Historia repozytorium pokazująca pracę na gałęzi i proces scalania.
- Kod zacommitowany zgodnie z dobrymi praktykami.
