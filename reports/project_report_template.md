# Raport Końcowy z Projektu
**Przedmiot:** Integracja Systemów Informatycznych
**Nazwa Projektu:** [Nazwa Twojego Projektu]
**Skład Zespołu:** [Imię i Nazwisko 1, Imię i Nazwisko 2]

---

## 1. Opis Projektu
[Krótki opis, jaką funkcjonalność realizuje system]

## 2. Architektura Systemu
- **Backend:** [np. Django]
- **Baza danych:** [np. PostgreSQL]
- **Konteneryzacja:** [np. Docker + Docker Compose]
- **Wdrożenie:** [np. Render.com]

## 3. Realizacja CI/CD
### GitHub Actions (CI)
[Opisz skonfigurowane workflowy. Jakie testy są uruchamiane? Jakie lintery?]
```yaml
# Fragment pliku .github/workflows/main.yml
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      - run: python manage.py test
```

### Deployment (CD)
[Opisz proces automatycznego wdrażania na produkcję]

## 4. Zarządzanie Projektem (Git/GitHub)
- **Zastosowany Workflow:** [np. GitHub Flow]
- **Statystyki PR:** [Ilość Pull Requestów, sposób ich review]
- **Link do repozytorium:** [URL]

## 5. Dokumentacja Techniczna (Markdown)
[Wymień kluczowe sekcje Twojego README.md]

## 6. Podsumowanie i Wnioski
[Główne wyzwania, co udało się zrealizować, plany na dalszy rozwój]
