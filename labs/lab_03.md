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
- [ ] Czy stworzono nową gałąź do pracy nad API?
- [ ] Czy `JsonResponse` poprawnie zwraca dane z bazy?
- [ ] Czy obsłużono ewentualne błędy połączenia z zewnętrznym API?
- [ ] Czy dane z zewnętrznego API są czytelnie sformatowane w szablonie?

### Wymagania na zaliczenie:
- Działający endpoint API zwracający dane w formacie JSON.
- Podstrona wyświetlająca dane pobrane dynamicznie z zewnętrznego serwisu.
- Historia commitów na gałęzi `feature/api-integration`.
