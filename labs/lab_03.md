# Laboratorium 3: Tworzenie REST API w Django i integracja z zewnętrznymi usługami

## Czas trwania: 6 godzin

### Cel:
Rozbudowa aplikacji o interfejs API oraz integracja z zewnętrznymi źródłami danych. Nauka wykorzystania biblioteki `requests` oraz formatu JSON.

### Zadania i ćwiczenia:

1. **Praca na gałęziach (Git) (0.5h):**
   - Stwórz nową gałąź: `git checkout -b feature/api-integration`.

2. **Proste API w Django (2h):**
   - Stwórz widok w `blog/views.py` zwracający listę postów w formacie JSON (użyj `JsonResponse`).
   - Przetestuj działanie endpointu w przeglądarce.
   - **Commit:** "Add basic JSON API endpoint for posts".

3. **Integracja z zewnętrznym API (2.5h):**
   - Stwórz nową aplikację `external_data`.
   - Napisz widok, który pobiera dane o pogodzie (np. z Open-Meteo API) lub przykładowe dane z JSONPlaceholder przy użyciu biblioteki `requests`.
   - Wyświetl pobrane dane w nowym szablonie.
   - **Commit:** "Integrate external API using requests library".

4. **Wykorzystanie przykładów (1h):**
   - Zapoznaj się z plikami w folderze `examples/` (np. `json_placeholder.py`). Wykorzystaj zawartą tam logikę w swojej aplikacji.

### Lista kontrolna (Checklist):
- [ ] Czy stworzono i wykorzystano nową gałąź `feature/api-integration`?
- [ ] Czy stworzono dedykowany endpoint API w formacie JSON (np. w `blog/views.py`)?
- [ ] Czy `JsonResponse` poprawnie zwraca dane pobrane z bazy danych?
- [ ] Czy dane w formacie JSON są poprawnie sformatowane (np. lista obiektów z polami `id`, `title`, `content`)?
- [ ] Czy stworzono nową aplikację `external_data` do integracji z zewnętrznymi usługami?
- [ ] Czy zainstalowano i wykorzystano bibliotekę `requests` (dodano ją do `requirements.txt`)?
- [ ] Czy zaimplementowano mechanizm pobierania danych z zewnętrznego serwisu (np. Open-Meteo, JSONPlaceholder)?
- [ ] Czy obsłużono sytuacje wyjątkowe przy połączeniu z zewnętrznym API (np. brak odpowiedzi serwera, błąd 404)?
- [ ] Czy pobrane dane są wyświetlane w nowym szablonie w czytelny sposób (np. w postaci tabeli lub listy)?
- [ ] Czy wykorzystano przykłady kodu z folderu `examples/`?
- [ ] Czy każdy commit ma jasny opis zmian związanych z API lub integracją?
- [ ] Czy sprawozdanie w formacie PDF zostało przygotowane?

### Wymagania na zaliczenie:
- Działający endpoint API zwracający dane w formacie JSON.
- Podstrona wyświetlająca dane pobrane dynamicznie z zewnętrznego serwisu.
- Historia commitów na gałęzi `feature/api-integration`.
