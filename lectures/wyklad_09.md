# Wykład 9: Automatyzacja integracji – CI/CD z GitHub Actions

## Czas trwania: 2 godziny

### Agenda:
1. Koncepcja Continuous Integration (CI) i Continuous Deployment (CD).
2. Wprowadzenie do GitHub Actions: Workflows, Jobs, Steps.
3. Składnia YAML dla GitHub Actions.
4. Automatyczne budowanie obrazów Docker i wypychanie do rejestru.
5. Automatyzacja testów i sprawdzanie jakości kodu (Linters).
6. Wyzwalacze (Triggers): push, pull_request, schedule.

### Treść:
Automatyzacja procesów integracyjnych jest kluczowa dla utrzymania wysokiej jakości oprogramowania. GitHub Actions pozwala na stworzenie potoków (pipelines), które automatycznie budują aplikację, sprawdzają jej poprawność i wdrażają ją na platformy PaaS po każdej zmianie w kodzie, co domyka cykl integracji systemów.
