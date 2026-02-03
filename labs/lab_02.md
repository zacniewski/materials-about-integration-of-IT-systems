# Laboratorium 2: Lokalna aplikacja Django – System Blogowy

## Czas trwania: 6 godzin

### Cel:
Stworzenie lokalnej wersji aplikacji 'Blog' w Django, zapoznanie się z modelami, migracjami oraz podstawowymi widokami i szablonami.

### Zadania i ćwiczenia:

1. **Inicjalizacja aplikacji:**
   - Stworzenie nowej aplikacji: `python manage.py startapp blog`.
   - Rejestracja aplikacji w `settings.py`.

2. **Definicja modeli (2h):**
   - Stworzenie modelu `Post` z polami: `title`, `content`, `author` (ForeignKey do User), `created_at`, `published_at`.
   - Implementacja metody `__str__` dla modelu.

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

3. **Migracje i Panel Admina (2h):**
   - Wykonanie migracji: `python manage.py makemigrations` i `python manage.py migrate`.
   - Rejestracja modelu w `blog/admin.py`.
   - Tworzenie superużytkownika (`createsuperuser`) i dodanie testowych postów.

4. **Widoki i Szablony (4h):**
   - Stworzenie widoku listy postów (`ListView`) i szczegółów postu (`DetailView`).
   - Konfiguracja URL-i w `blog/urls.py` oraz głównym `urls.py`.
   - Tworzenie folderu `templates/blog/` i plików HTML.

**Kod źródłowy `blog/views.py`:**
```python
from django.views.generic import ListView, DetailView
from .models import Post

class PostListView(ListView):
    model = Post
    template_name = 'blog/post_list.html'
    context_object_name = 'posts'
    ordering = ['-published_at']

class PostDetailView(DetailView):
    model = Post
    template_name = 'blog/post_detail.html'
```

5. **Praca z Git (2h):**
   - Dodanie zmian do repozytorium.
   - Stworzenie nowej gałęzi `feature/blog-app`.

### Lista kontrolna (Checklist):
- [ ] Czy aplikacja `blog` została dodana do `INSTALLED_APPS`?
- [ ] Czy migracje zostały wykonane pomyślnie?
- [ ] Czy posty są widoczne w panelu `/admin`?
- [ ] Czy strona główna wyświetla listę postów pobranych z bazy danych?
- [ ] Czy kliknięcie w tytuł postu przenosi do strony ze szczegółami?
- [ ] Czy zastosowano dziedziczenie szablonów (np. `base.html`)?

### Wymagania na zaliczenie:
- Działająca lokalnie aplikacja bloga z minimum dwoma widokami.
- Możliwość dodawania postów przez panel administratora.
- Kod źródłowy zacommitowany na dedykowanej gałęzi.
