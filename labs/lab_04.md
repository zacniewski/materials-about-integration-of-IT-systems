# Laboratorium 4: Tworzenie REST API w Django

## Czas trwania: 6 godzin

### Cel:
Zrozumienie koncepcji REST API oraz implementacja punktów końcowych (endpoints) dostarczających dane w formacie JSON bez użycia zewnętrznych bibliotek (jak DRF) w celu zrozumienia podstaw.

### Zadania i ćwiczenia:

1. **Przygotowanie danych (2h):**
   - Wykorzystanie modeli z poprzednich laboratoriów (np. `Post` lub `Task`) lub stworzenie nowego prostego modelu `Product(name, price, description)`.

2. **Implementacja widoków JSON (4h):**
   - Użycie `JsonResponse` do zwracania list obiektów i pojedynczych rekordów.
   - Obsługa błędów (np. 404 w formacie JSON).

**Kod źródłowy `api/views.py`:**
```python
from django.http import JsonResponse
from blog.models import Post

def api_post_list(request):
    posts = Post.objects.all()
    data = {
        "results": list(posts.values("id", "title", "author__username", "published_at"))
    }
    return JsonResponse(data)

def api_post_detail(request, pk):
    try:
        post = Post.objects.get(pk=pk)
        data = {
            "id": post.id,
            "title": post.title,
            "content": post.content,
            "author": post.author.username
        }
        return JsonResponse(data)
    except Post.DoesNotExist:
        return JsonResponse({"error": "Post not found"}, status=404)
```

3. **Routing API (2h):**
   - Stworzenie dedykowanego pliku `urls.py` dla API (np. `/api/posts/`).

4. **Testowanie (2h):**
   - Testowanie punktów końcowych za pomocą przeglądarki lub narzędzia `curl` / Postman.

### Lista kontrolna (Checklist):
- [ ] Czy punkty końcowe zwracają poprawny Content-Type (`application/json`)?
- [ ] Czy struktura JSON jest zgodna z założeniami?
- [ ] Czy zapytanie o nieistniejący zasób zwraca błąd 404 w formacie JSON?
- [ ] Czy pola typu ForeignKey (np. autor) są poprawnie serializowane (np. jako nazwa użytkownika, a nie ID)?

### Wymagania na zaliczenie:
- Minimum dwa działające endpointy (lista i szczegóły).
- Poprawna obsługa kodów statusu HTTP.
- Dokumentacja punktów końcowych w pliku README.
