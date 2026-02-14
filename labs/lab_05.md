# Laboratorium 5: Automatyzacja CI/CD z GitHub Actions i wdrożenie PaaS

## Czas trwania: 6 godzin

### Cel:
Automatyzacja procesów testowania i wdrażania aplikacji przy użyciu GitHub Actions oraz platformy Render.com.

### Zadania i ćwiczenia:

1. **Testy jednostkowe (1.5h):**
   - Napisz minimum 2 testy jednostkowe dla swoich widoków lub modeli.
   - Uruchom testy lokalnie: `python manage.py test`.
   - **Commit:** "Add unit tests for blog application".

2. **Konfiguracja GitHub Actions (2.5h):**
   - Stwórz plik `.github/workflows/main.yml`.
   - Skonfiguruj potok, który po każdym `push` uruchamia: Lintera (flake8) oraz testy Django.
   - **Zadanie:** Celowo zepsuj test i sprawdź, czy GitHub Actions zgłosi błąd (czerwony status). Napraw błąd.
   - **Commit:** "Configure GitHub Actions CI pipeline".

3. **Wdrożenie na Render.com (2h):**
   - Połącz swoje repozytorium z platformą Render.
   - Skonfiguruj "Deploy Hook".
   - Dodaj krok w GitHub Actions, który po udanych testach wyśle powiadomienie do Render (Auto-deploy).
   - **Commit:** "Integrate CD with Render.com via Deploy Hook".

### Lista kontrolna (Checklist):
- [ ] Czy potok CI na GitHubie jest "zielony"?
- [ ] Czy testy są uruchamiane automatycznie przy Pull Requestach?
- [ ] Czy aplikacja jest dostępna pod publicznym adresem URL?

### Wymagania na zaliczenie:
- Działający i udokumentowany potok CI/CD.
- Aplikacja wdrożona w chmurze (PaaS).
- Poprawnie skonfigurowane Secrets w GitHubie.
