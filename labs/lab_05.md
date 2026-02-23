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
- [ ] Czy napisano i pomyślnie uruchomiono lokalnie co najmniej 2 testy jednostkowe?
- [ ] Czy plik workflow (`.github/workflows/main.yml`) został stworzony i znajduje się w poprawnym folderze?
- [ ] Czy workflow zawiera kroki do instalacji zależności, uruchomienia lintera (`flake8`) oraz testów Django?
- [ ] Czy w historii commitów widać dowód na celowe popsucie testu i jego późniejszą naprawę (zgodnie z zadaniem 2)?
- [ ] Czy potok CI na GitHubie jest "zielony" dla najnowszego commita?
- [ ] Czy testy są automatycznie uruchamiane przy każdym `push` i `pull_request`?
- [ ] Czy aplikacja została połączona z platformą Render.com?
- [ ] Czy poprawnie skonfigurowano zmienne środowiskowe i Secrets na GitHubie (np. `RENDER_DEPLOY_HOOK`)?
- [ ] Czy wdrożenie (deployment) na Render.com zakończyło się sukcesem?
- [ ] Czy aplikacja jest dostępna pod publicznym adresem URL i działa poprawnie?
- [ ] Czy sprawozdanie w formacie PDF zostało przygotowane?

### Wymagania na zaliczenie:
- Działający i udokumentowany potok CI/CD.
- Aplikacja wdrożona w chmurze (PaaS).
- Poprawnie skonfigurowane Secrets w GitHubie.
