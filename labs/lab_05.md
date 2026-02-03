# Laboratorium 5: Integracja z zewnętrznymi API

## Czas trwania: 6 godzin

### Cel:
Nabycie umiejętności pobierania danych z zewnętrznych serwisów (API) i wyświetlania ich w aplikacji Django.

### Zadania i ćwiczenia:

1. **Wybór API (1h):**
   - Wybierz jedno z darmowych API: Open-Meteo (pogoda), REST Countries (informacje o krajach) lub JSONPlaceholder.

2. **Logika pobierania danych (3h):**
   - Wykorzystanie biblioteki `requests` do wysyłania zapytań HTTP.
   - Analiza odpowiedzi JSON.

**Przykład logiki (pobieranie danych o kraju):**
```python
import requests

def get_country_info(country_name):
    url = f"https://restcountries.com/v3.1/name/{country_name}"
    response = requests.get(url)
    if response.status_code == 200:
        return response.json()[0]
    return None
```

3. **Integracja z Django (4h):**
   - Stworzenie formularza, w którym użytkownik wpisuje nazwę kraju lub miasta.
   - Stworzenie widoku, który przetwarza formularz, pobiera dane z API i przekazuje je do szablonu.

**Kod źródłowy widoku (`weather/views.py`):**
```python
from django.shortcuts import render
import requests

def index(request):
    data = {}
    if 'city' in request.GET:
        city = request.GET['city']
        # Przykładowe zapytanie do API pogodowego
        url = f"https://api.open-meteo.com/v1/forecast?latitude=52.23&longitude=21.01&current_weather=true"
        response = requests.get(url)
        data = response.json()
    return render(request, 'weather/index.html', {'data': data})
```

4. **Wyświetlanie wyników (2h):**
   - Prezentacja pobranych danych w czytelny sposób (np. tabela lub karty).

### Lista kontrolna (Checklist):
- [ ] Czy zainstalowano bibliotekę `requests` i dodano ją do `requirements.txt`?
- [ ] Czy aplikacja obsługuje sytuację, gdy API jest niedostępne (błąd połączenia)?
- [ ] Czy dane z JSON są poprawnie mapowane na elementy w szablonie HTML?
- [ ] Czy formularz zabezpieczony jest przed pustymi zapytaniami?

### Wymagania na zaliczenie:
- Działający formularz pobierający dane w czasie rzeczywistym z wybranego API.
- Poprawna obsługa błędów (np. informacja o nieznalezieniu miasta/kraju).
- Wyświetlenie minimum 3 różnych informacji z odpowiedzi API (np. temperatura, prędkość wiatru, opis).
