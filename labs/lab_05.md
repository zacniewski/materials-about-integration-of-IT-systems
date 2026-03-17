# Laboratorium 5: Automatyzacja CI/CD z GitHub Actions i wdrożenie PaaS

## Czas trwania: 6 godzin

### Cel:
Automatyzacja procesów testowania i wdrażania aplikacji (Python lub JavaScript) przy użyciu GitHub Actions oraz darmowych platform typu PaaS (np. Render.com, Vercel, Railway).

### Zadania i ćwiczenia:

1. **Testy jednostkowe (1.5h):**
   - Napisz minimum 2 testy jednostkowe dla swoich widoków, modeli lub funkcji.
   - **Python:** Uruchom testy: `python manage.py test`.
   - **JavaScript:** Zainstaluj `jest` i uruchom testy: `npm test`.
   - **Commit:** "Add unit tests for the application".

2. **Konfiguracja GitHub Actions CI (2.5h):**
   - Stwórz plik `.github/workflows/main.yml`.
   - Skonfiguruj potok (pipeline), który po każdym `push` uruchamia: Lintera (flake8 dla Py, ESLint dla JS) oraz testy jednostkowe.
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
- [ ] Czy workflow zawiera kroki do instalacji zależności, uruchomienia lintera oraz testów (zgodnie z technologią)?
- [ ] Czy w historii commitów widać dowód na celowe popsucie testu i jego późniejszą naprawę (zgodnie z zadaniem 2)?
- [ ] Czy potok CI na GitHubie jest "zielony" dla najnowszego commita?
- [ ] Czy testy są automatycznie uruchamiane przy każdym `push` i `pull_request`?
- [ ] Czy aplikacja została połączona z platformą PaaS (np. Render.com, Vercel)?
- [ ] Czy poprawnie skonfigurowano zmienne środowiskowe i Secrets na GitHubie (np. `RENDER_DEPLOY_HOOK` lub tokeny dostępowe)?
- [ ] Czy wdrożenie (deployment) na platformę zewnętrzną zakończyło się sukcesem?
- [ ] Czy aplikacja jest dostępna pod publicznym adresem URL i działa poprawnie (np. zwraca dane z API lub renderuje stronę)?
- [ ] Czy sprawozdanie w formacie PDF zostało przygotowane (zawiera link do działającej aplikacji i zrzut ekranu z zielonego potoku CI)?

### Wymagania na zaliczenie:
- Działający i udokumentowany potok CI/CD.
- Aplikacja wdrożona w chmurze (PaaS).
- Poprawnie skonfigurowane Secrets w GitHubie.
