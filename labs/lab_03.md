# Laboratorium 3: Tworzenie REST API w Django i integracja z zewnętrznymi usługami

## Czas trwania: 6 godzin

### Cel:
Rozbudowa aplikacji o interfejs API oraz integracja z zewnętrznymi źródłami danych. Nauka wykorzystania bibliotek do zapytań HTTP (np. `requests` w Pythonie, `axios` lub `fetch` w JS) oraz formatu JSON.

### Zadania i ćwiczenia:

1. **Praca na gałęziach (Git) (0.5h):**
   - Stwórz nową gałąź: `git checkout -b feature/api-integration`.

2. **Proste API (2h):**
   - **Django:** Stwórz widok w `blog/views.py` zwracający listę postów w formacie JSON (użyj `JsonResponse`).
   - **Express.js:** Stwórz trasę `router.get('/api/posts', ...)` i użyj `res.json(posts)`.
   - Przetestuj działanie endpointu w przeglądarce lub narzędziu typu Postman/Insomnia.
   - **Commit:** "Add basic JSON API endpoint for posts".

3. **Integracja z zewnętrznym API (2.5h):**
   - Stwórz nową aplikację/moduł `external_data`.
   - Napisz logikę, która pobiera dane o pogodzie (np. z Open-Meteo API) lub przykładowe dane z JSONPlaceholder.
   - **Django:** Użyj biblioteki `requests`.
   - **Express.js:** Użyj wbudowanego `fetch` (Node.js 18+) lub zainstaluj `axios`.
   - Wyświetl pobrane dane w nowym szablonie.
   - **Commit:** "Integrate external API using requests/axios library".

4. **Wykorzystanie przykładów (1h):**
   - Zapoznaj się z plikami w folderze `examples/` (np. `json_placeholder.py`). Wykorzystaj zawartą tam logikę w swojej aplikacji.

### Lista kontrolna (Checklist):
- [ ] Czy stworzono i wykorzystano nową gałąź `feature/api-integration`?
- [ ] Czy stworzono dedykowany endpoint API w formacie JSON (np. `/api/posts`)?
- [ ] Czy API poprawnie zwraca dane pobrane z Twojej bazy danych?
- [ ] Czy dane w formacie JSON są poprawnie sformatowane (np. lista obiektów z polami `id`, `title`, `content`)?
- [ ] Czy zainstalowano i wykorzystano odpowiednią bibliotekę do zapytań HTTP (`requests` dla Pythona, `axios` dla JS)? Czy dodano ją do pliku zależności (`requirements.txt` lub `package.json`)?
- [ ] Czy zaimplementowano mechanizm pobierania danych z zewnętrznego serwisu (np. Open-Meteo, JSONPlaceholder)?
- [ ] Czy obsłużono sytuacje wyjątkowe przy połączeniu z zewnętrznym API (użycie bloku `try...except` w Pythonie lub `try...catch` w JS)?
- [ ] Czy sprawdzono kod odpowiedzi HTTP z zewnętrznego serwisu (np. `response.status_code == 200` lub `res.ok`)?
- [ ] Czy pobrane dane są wyświetlane w nowym szablonie w czytelny sposób (np. w postaci tabeli lub listy)?
- [ ] Czy wykorzystano przykłady kodu z folderu `examples/`?
- [ ] Czy każdy commit ma jasny opis zmian związanych z API lub integracją?
- [ ] Czy sprawozdanie w formacie PDF zostało przygotowane (zawiera zrzuty ekranu endpointu API i strony z pobranymi danymi)?

### Wymagania na zaliczenie:
- Działający endpoint API zwracający dane w formacie JSON.
- Podstrona wyświetlająca dane pobrane dynamicznie z zewnętrznego serwisu.
- Historia commitów na gałęzi `feature/api-integration`.
