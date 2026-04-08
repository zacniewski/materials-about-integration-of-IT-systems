# Laboratorium 3: Integracja z zewnętrznymi API i przetwarzanie danych

## Czas trwania: 6 godzin

### Cel:
Rozbudowa aplikacji o mechanizmy integracji z zewnętrznymi źródłami danych. W ramach laboratorium należy zintegrować aplikację z co najmniej dwoma wybranymi zewnętrznymi API. W instrukcji skupiamy się na **Open-Meteo** oraz **JSONPlaceholder**, jednak są to tylko propozycje – możesz wybrać dowolne inne darmowe API (pełna lista dostępna pod adresem: [https://github.com/public-apis/public-apis](https://github.com/public-apis/public-apis)). Nauka pobierania, filtrowania i transformacji danych JSON, a także ich wizualizacji (np. wykresy) i wyświetlania w aplikacji webowej.

### Zadania i ćwiczenia:

1. **Praca na gałęziach (Git) (0.5h):**
   - Stwórz nową gałąź: `git checkout -b feature/external-api-integration`.

2. **Przygotowanie struktury (0.5h):**
   - Stwórz nową aplikację (Django: `python manage.py startapp external_data`) lub moduł (Express.js).
   - Upewnij się, że masz zainstalowane niezbędne biblioteki: `requests`, `matplotlib` (Python) lub `axios`, `chart.js` (JS).

3. **Integracja z Open-Meteo API (2h):**
   - Napisz logikę pobierającą prognozę pogody dla wybranego miasta (użyj współrzędnych geograficznych).
   - **Obróbka danych:** Wyciągnij z odpowiedzi API listę temperatur (`temperature_2m`) oraz odpowiadające im czasy (`time`) dla najbliższych 24 godzin.
   - **Wizualizacja:** Wygeneruj wykres temperatury (np. za pomocą `matplotlib` zapisując do pliku statycznego lub używając biblioteki JS na froncie).
   - Wyświetl aktualną temperaturę oraz wykres na podstronie.

4. **Integracja z JSONPlaceholder API (2h):**
   - Pobierz listę postów lub użytkowników (np. `/posts` lub `/users`).
   - **Obróbka danych:** 
     - Przefiltruj dane (np. tylko posty konkretnego użytkownika).
     - Policz statystyki (np. liczba postów na użytkownika lub średnia długość tytułu).
   - **Wizualizacja:** Stwórz listę elementów, gdzie każdy element zawiera wybrane, przetworzone dane (np. "Użytkownik X napisał Y postów").
   - Wykorzystaj przykłady z `examples/json_placeholder.py`.

5. **Własny endpoint API (1h):**
   - Stwórz endpoint w swojej aplikacji (np. `/api/weather-summary/`), który zwraca *przetworzone* dane z zewnętrznego API w formacie JSON.
   - Endpoint powinien agregować dane (np. średnia temperatura na nadchodzący dzień).

### Lista kontrolna (Checklist):
- [ ] Czy stworzono i wykorzystano nową gałąź `feature/external-api-integration`?
- [ ] Czy zaimplementowano pobieranie danych z co najmniej dwóch wybranych zewnętrznych API (np. Open-Meteo, JSONPlaceholder lub inne z listy public-apis)?
- [ ] Czy dane z zewnętrznych API są poddawane **obróbce** (filtrowanie, wycinanie zakresów, agregacja)?
- [ ] Czy zaimplementowano przynajmniej jedną formę **wizualizacji danych** (np. wykres temperatury)?
- [ ] Czy stworzono własny endpoint API zwracający przetworzone dane zewnętrzne?
- [ ] Czy obsłużono błędy połączenia (try-except / try-catch) oraz sprawdzono kody statusu HTTP?
- [ ] Czy zainstalowane biblioteki (`requests`, `matplotlib` / `axios` itp.) zostały dodane do pliku zależności (`requirements.txt` / `package.json`)?
- [ ] Czy pobrane i przetworzone dane są wyświetlane w czytelny sposób (tabele, wykresy, listy)?
- [ ] Czy każdy commit ma jasny opis (np. "Add weather data processing and charts")?
- [ ] Czy sprawozdanie zawiera zrzuty ekranu działających integracji oraz wygenerowanych wykresów?

### Wymagania na zaliczenie:
- Działająca integracja z dwoma zewnętrznymi API (np. Open-Meteo, JSONPlaceholder lub inne wybrane z listy [public-apis](https://github.com/public-apis/public-apis)).
- Udokumentowany proces obróbki i filtrowania danych.
- Widoczna wizualizacja danych (np. wykres) na stronie.
- Własny endpoint API serwujący zagregowane dane zewnętrzne.
- Poprawna historia commitów na dedykowanej gałęzi.
