# Laboratorium 3: Lokalna aplikacja Django – Lista zadań (To-Do)

## Czas trwania: 6 godzin

### Cel:
Stworzenie aplikacji do zarządzania zadaniami z wykorzystaniem systemów formularzy Django oraz obsługą autoryzacji użytkowników.

### Zadania i ćwiczenia:

1. **Inicjalizacja aplikacji i modeli (2h):**
   - Stworzenie aplikacji `todo`.
   - Model `Task`: `user` (ForeignKey), `title`, `description`, `completed` (BooleanField), `created_at`.

**Kod źródłowy `todo/models.py`:**
```python
from django.db import models
from django.contrib.auth.models import User

class Task(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE, null=True, blank=True)
    title = models.CharField(max_length=200)
    description = models.TextField(null=True, blank=True)
    completed = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title

    class Meta:
        ordering = ['completed']
```

2. **Logika biznesowa i widoki (4h):**
   - Wykorzystanie widoków opartych na klasach: `LoginView`, `RegisterPage` (opcjonalnie), `TaskList`, `TaskCreate`, `TaskUpdate`, `DeleteView`.
   - Zapewnienie, że użytkownik widzi tylko swoje zadania.

**Kod źródłowy `todo/views.py` (filtrowanie danych):**
```python
from django.views.generic.list import ListView
from django.contrib.auth.mixins import LoginRequiredMixin
from .models import Task

class TaskList(LoginRequiredMixin, ListView):
    model = Task
    context_object_name = 'tasks'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['tasks'] = context['tasks'].filter(user=self.request.user)
        context['count'] = context['tasks'].filter(completed=False).count()
        return context
```

3. **Formularze i obsługa POST (2h):**
   - Automatyczne przypisywanie zalogowanego użytkownika do tworzonego zadania.

4. **Interfejs użytkownika (2h):**
   - Stylowanie listy zadań (oznaczenie zadań zakończonych).
   - Dodanie przycisków Edytuj/Usuń.

### Lista kontrolna (Checklist):
- [ ] Czy dostęp do listy zadań wymaga zalogowania?
- [ ] Czy użytkownik A widzi zadania użytkownika B? (Powinien widzieć tylko swoje)
- [ ] Czy można oznaczyć zadanie jako zakończone?
- [ ] Czy nowo utworzone zadanie jest automatycznie przypisywane do zalogowanego profilu?
- [ ] Czy działa usuwanie zadań z potwierdzeniem?

### Wymagania na zaliczenie:
- Pełny cykl CRUD dla zadań.
- Poprawnie działający mechanizm logowania i wylogowania.
- Zastosowanie `LoginRequiredMixin` w widokach chronionych.
