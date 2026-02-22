# Laboratorium 1: Git, GitHub i przygotowanie środowiska Django

## Czas trwania: 6 godzin

### Cel:
Opanowanie systemu kontroli wersji Git, platformy GitHub oraz przygotowanie lokalnego środowiska programistycznego dla wybranego frameworka (np. Django, React, itp.). Szczególny nacisk położono na poprawne dokumentowanie pracy przy użyciu Markdown oraz konfigurację bezpiecznego dostępu przez SSH. Przed rozpoczęciem zapoznaj się z listą wymaganych kont w pliku [before_you_start.md](before_you_start.md).

### Zadania i ćwiczenia:

#### 0. Wiedza teoretyczna w pigułce
*   **Git** to rozproszony system kontroli wersji. "Rozproszony" oznacza, że nie potrzebujesz stałego połączenia z serwerem, aby robić commity, przeglądać historię czy tworzyć gałęzie.
*   **SSH (Secure Shell)** to protokół używany do bezpiecznej komunikacji. Wykorzystuje asymetryczną kryptografię (klucz publiczny i prywatny). Klucz publiczny wgrywasz na GitHub, a prywatny trzymasz bezpiecznie na swoim komputerze.
*   **Wirtualne środowisko (venv)** izoluje zależności Twojego projektu. Dzięki temu różne projekty mogą używać różnych wersji tych samych bibliotek (np. Django 4.2 i Django 5.0) na tym samym komputerze bez konfliktów.

1. **Konfiguracja środowiska i Markdown (2h):**
   - Instalacja Git oraz Python.
   - Konfiguracja nazwy użytkownika i emaila w Git.
   - **Generowanie kluczy SSH:**
     1. Otwórz terminal i wpisz: `ssh-keygen -t ed25519 -C "twój_email@example.com"`.
     2. Zaakceptuj domyślną lokalizację pliku.
     3. Skopiuj zawartość pliku publicznego: `cat ~/.ssh/id_ed25519.pub`.
     4. Dodaj klucz w ustawieniach GitHub (Settings -> SSH and GPG keys).
   - **Zadanie Markdown:** Stwórz plik `README.md` w swoim folderze roboczym. Użyj nagłówków, list, pogrubienia, kodu inline oraz dodaj link do oficjalnej dokumentacji Django.

| Narzędzie | Komenda | Opis |
| :--- | :--- | :--- |
| **Git** | `git config --global user.name "Twoje Imie"` | Konfiguracja tożsamości |
| **Venv** | `python -m venv venv` | Tworzenie izolowanego środowiska |
| **Pip** | `pip install django` | Instalacja frameworka |
| **Django** | `django-admin startproject core .` | Inicjalizacja projektu |

2. **Inicjalizacja projektu Django i Git (2h):**
   - Utworzenie nowego projektu: `django-admin startproject core .`.
   - Inicjalizacja repozytorium: `git init`.
   - **Stworzenie pliku `.gitignore`:** Wykorzystaj `gitignore.io` lub stwórz plik ręcznie. Musi on zawierać co najmniej:
     ```text
     # Środowisko wirtualne
     venv/
     ENV/
     
     # Cache Pythona
     **/__pycache__/
     *.py[cod]
     
     # Baza danych (lokalna)
     db.sqlite3
     
     # Pliki IDE
     .vscode/
     .idea/
     ```
   - Pierwszy commit: "Initial commit: Django project structure".

**Struktura plików projektu Django:**
```text
.
├── core/               # Ustawienia główne projektu
│   ├── __init__.py
│   ├── asgi.py
│   ├── settings.py     # Konfiguracja (baza danych, zainstalowane aplikacje)
│   ├── urls.py         # Główny routing aplikacji
│   └── wsgi.py         # Interfejs serwera aplikacji
├── manage.py           # Narzędzie CLI do zarządzania projektem
├── .gitignore          # Pliki ignorowane przez Git
└── requirements.txt    # Lista zależności projektu
```

3. **Praca z gałęziami i podstawowa logika (3h):**
   - Tworzenie gałęzi `feature/initial-setup`.
   - Stworzenie pierwszej aplikacji: `python manage.py startapp base`.
   - Rejestracja aplikacji w `settings.py`.
   - Scalanie zmian do gałęzi `main`.

**Diagram przepływu pracy w Git (Feature Branch Workflow):**
```mermaid
graph LR
    A[Main Branch] --> B(git checkout -b feature/xyz)
    B --> C[Praca nad kodem]
    C --> D(git commit)
    D --> E(git push origin feature/xyz)
    E --> F[Pull Request na GitHub]
    F --> G(git merge feature/xyz)
    G --> A
```

4. **Współpraca z GitHub (3h):**
   - Tworzenie zdalnego repozytorium na GitHub (nie dodawaj README ani .gitignore na GitHubie - mamy je już lokalnie).
   - Połączenie lokalnego repozytorium ze zdalnym: `git remote add origin git@github.com:użytkownik/nazwa-repo.git`.
   - Operacje `push`, `pull`.
   - Wykorzystanie GitHub Issues do zaplanowania kolejnych etapów projektu.

5. **Symulacja konfliktu (NOWE - 1h):**
   - Na GitHubie wyedytuj plik `README.md` bezpośrednio w przeglądarce i zatwierdź zmiany.
   - W lokalnym repozytorium (na tym samym pliku, w tej samej linii) wprowadź inną zmianę i spróbuj zrobić `git commit` oraz `git push`.
   - Git zablokuje push. Wykonaj `git pull`. Powstanie konflikt.
   - Rozwiąż konflikt ręcznie, wybierając pożądaną wersję tekstu, wykonaj `git add README.md` i `git commit`.

6. **Automatyzacja z GitHub Actions (2h):**
   - Utworzenie w głównym folderze projektu struktury katalogów: `.github/workflows/`.
   - Stworzenie pliku `django_check.yml` o następującej treści (weryfikacja składni):
     ```yaml
     name: Django Syntax Check
     on: [push]
     jobs:
       lint:
         runs-on: ubuntu-latest
         steps:
           - uses: actions/checkout@v4
           - name: Set up Python
             uses: actions/setup-python@v5
             with:
               python-version: '3.10'
           - name: Install flake8
             run: pip install flake8
           - name: Run linting
             run: flake8 . --count --select=E9,F63,F7,F82 --show-source --statistics
     ```
   - Wysłanie zmian do repozytorium (`push`) i zaobserwowanie zakładki **Actions** na GitHubie.
   - **Zadanie:** Celowo wprowadź błąd składniowy (np. usuń dwukropek w `urls.py`), wypchnij zmianę i sprawdź, czy GitHub Actions zgłosi błąd (czerwony X).

### Lista kontrolna (Checklist):
- [ ] Czy zainstalowano Pythona (wersja 3.10+) i Gita?
- [ ] Czy skonfigurowano klucze SSH i połączenie z GitHub?
- [ ] Czy projekt Django uruchamia się lokalnie (`python manage.py runserver`)?
- [ ] Czy plik `.gitignore` zawiera `venv/`, `__pycache__/` oraz `db.sqlite3`?
- [ ] Czy repozytorium na GitHub jest publiczne i zawiera README.md?
- [ ] Czy skonfigurowano pierwszy workflow w GitHub Actions i czy zakończył się sukcesem (zielony znaczek)?

### Wymagania na zaliczenie:
- Utworzenie publicznego repozytorium na GitHub z zainicjalizowanym projektem Django.
- Wykazanie się poprawną historią commitów.
- Prawidłowo skonfigurowany plik `.gitignore`.
