# Konfiguracja GitHub Actions dla Django i Node.js

GitHub Actions to narzędzie do automatyzacji cyklu życia oprogramowania (CI/CD). Pozwala ono na automatyczne uruchamianie testów, budowanie aplikacji oraz wdrażanie kodu przy każdej zmianie w repozytorium (np. `push` lub `pull request`).

## 1. Struktura katalogów
Pliki konfiguracyjne GitHub Actions (tzw. workflowy) muszą znajdować się w katalogu `.github/workflows/` w głównym folderze projektu. Są to pliki w formacie YAML (rozszerzenie `.yml`).

---

## 2. GitHub Actions dla Django (Python)

Poniższy przykład konfiguracji uruchamia testy jednostkowe Django oraz sprawdza poprawność składni kodu za pomocą `flake8`.

### Plik: `.github/workflows/django_tests.yml`

```yaml
name: Django CI

# Wyzwalacze - kiedy workflow ma się uruchomić
on:
  push:
    branches: [ "main", "develop" ]
  pull_request:
    branches: [ "main" ]

jobs:
  test:
    runs-on: ubuntu-latest
    
    # Definicja usług pomocniczych (np. baza danych)
    services:
      postgres:
        image: postgres:15
        env:
          POSTGRES_DB: django_db
          POSTGRES_USER: django_user
          POSTGRES_PASSWORD: django_password
        ports:
          - 5432:5432
        # Czekaj na uruchomienie bazy
        options: >-
          --health-cmd pg_isready
          --health-interval 10s
          --health-timeout 5s
          --health-retries 5

    steps:
    # 1. Pobranie kodu z repozytorium
    - uses: actions/checkout@v4

    # 2. Konfiguracja interpretera Python
    - name: Set up Python 3.10
      uses: actions/setup-python@v5
      with:
        python-version: '3.10'

    # 3. Instalacja zależności
    - name: Install Dependencies
      run: |
        python -m pip install --upgrade pip
        pip install -r requirements.txt

    # 4. Sprawdzenie linterem (flake8)
    - name: Run Linting
      run: |
        pip install flake8
        flake8 . --count --select=E9,F63,F7,F82 --show-source --statistics

    # 5. Uruchomienie testów Django
    - name: Run Tests
      env:
        DATABASE_URL: postgres://django_user:django_password@localhost:5432/django_db
        SECRET_KEY: "temporary-secret-key-for-tests"
      run: |
        python manage.py test
```

### Kluczowe elementy dla Django:
- **`actions/setup-python`**: Ustawia wybraną wersję Pythona.
- **`services`**: Pozwala na uruchomienie np. PostgreSQL w kontenerze Docker, co jest niezbędne, jeśli testy wymagają prawdziwej bazy danych.
- **`env`**: Definiuje zmienne środowiskowe potrzebne do połączenia z bazą danych w trakcie testów.

---

## 3. GitHub Actions dla Node.js

Poniższy przykład konfiguracji instaluje zależności i uruchamia testy dla aplikacji Node.js.

### Plik: `.github/workflows/node_tests.yml`

```yaml
name: Node.js CI

on:
  push:
    branches: [ "main", "master" ]
  pull_request:
    branches: [ "main", "master" ]

jobs:
  build:
    runs-on: ubuntu-latest

    # Strategia macierzowa - testowanie na wielu wersjach Node.js jednocześnie
    strategy:
      matrix:
        node-version: [18.x, 20.x, 22.x]

    steps:
    - uses: actions/checkout@v4

    - name: Use Node.js ${{ matrix.node-version }}
      uses: actions/setup-node@v4
      with:
        node-version: ${{ matrix.node-version }}
        # Cache'owanie zależności przyspiesza kolejne uruchomienia
        cache: 'npm'

    - name: Install dependencies
      run: npm ci

    - name: Run tests
      run: npm test
```

### Kluczowe elementy dla Node.js:
- **`strategy: matrix`**: Pozwala na przetestowanie aplikacji na kilku wersjach Node.js za jednym razem.
- **`npm ci`**: Podobne do `npm install`, ale przeznaczone dla środowisk CI (używa pliku `package-lock.json` i zapewnia powtarzalność).
- **`cache: 'npm'`**: Przyspiesza działanie workflowu poprzez zapamiętywanie pobranych paczek między uruchomieniami.

---

## Jak sprawdzić czy działa?
1. Wypchnij zmiany do repozytorium (`git push`).
2. Wejdź na GitHub w zakładkę **Actions**.
3. Kliknij w ostatni workflow, aby zobaczyć szczegóły każdego kroku i ewentualne logi błędów.
