# Wykład 3: Architektura systemów i wprowadzenie do Platform as a Service (PaaS)

## Czas trwania: 2 godziny

### Agenda:
1. Ewolucja hostingu: On-premise -> IaaS -> PaaS -> SaaS -> Serverless.
2. Charakterystyka PaaS: zalety, wady i przypadki użycia.
3. Model odpowiedzialności w chmurze.
4. Architektura 12-factor app (Aplikacje dwunastoczynnikowe).
5. Separacja kodu od konfiguracji.
6. Bezstanowość (statelessness) jako klucz do skalowalności.

### Treść:

#### 1. Ewolucja hostingu i modeli chmurowych
Przejście od własnych serwerowni do modeli chmurowych zmieniło sposób integracji systemów.

| Model | Za co odpowiada dostawca | Za co odpowiada klient | Przykład |
| :--- | :--- | :--- | :--- |
| **On-premise** | Nic | Wszystko (sprzęt, OS, dane, aplikacja) | Własny serwer |
| **IaaS** | Sprzęt, wirtualizacja | System operacyjny, dane, aplikacja | AWS EC2 |
| **PaaS** | Sprzęt, OS, Runtime | Dane, aplikacja | Heroku, Azure App Service |
| **SaaS** | Wszystko | Użytkowanie | Gmail, Salesforce |
| **Serverless** | Infrastruktura i skalowanie | Tylko funkcja (kod) | AWS Lambda |

#### 2. Charakterystyka PaaS
Platform as a Service (PaaS) to model, w którym dostawca chmury dostarcza platformę umożliwiającą klientom tworzenie, uruchamianie i zarządzanie aplikacjami bez konieczności budowania i utrzymywania infrastruktury.

*   **Zalety:** Szybkość wdrożenia, automatyczne skalowanie, niższe koszty operacyjne.
*   **Wady:** Uzależnienie od dostawcy (Vendor lock-in), ograniczenia w konfiguracji systemu operacyjnego.

#### 3. Model odpowiedzialności w chmurze
W chmurze bezpieczeństwo i zarządzanie są współdzielone.
*   **Dostawca:** Odpowiada za bezpieczeństwo „chmury” (fizyczne serwery, sieć, wirtualizacja).
*   **Klient:** Odpowiada za bezpieczeństwo „w chmurze” (kod aplikacji, dane, zarządzanie dostępem, konfiguracja).

#### 4. Architektura 12-factor app
Zbiór dobrych praktyk przy tworzeniu aplikacji typu SaaS i natywnych dla chmury.

1.  **Codebase:** Jedno repozytorium kodu, wiele wdrożeń.
2.  **Dependencies:** Jawna deklaracja zależności (np. `package.json`, `pom.xml`).
3.  **Config:** Przechowywanie konfiguracji w środowisku (zmienne środowiskowe).
4.  **Backing services:** Traktowanie zasobów (bazy danych, kolejki) jako podłączone zasoby.
5.  **Build, release, run:** Ścisła separacja etapów wdrażania.
6.  **Processes:** Aplikacja jako jeden lub więcej bezstanowych procesów.
7.  **Port binding:** Eksportowanie usług przez bindowanie portów.
8.  **Concurrency:** Skalowanie poprzez model procesów.
9.  **Disposability:** Szybkie uruchamianie i bezpieczne wyłączanie.
10. **Dev/prod parity:** Utrzymywanie środowisk deweloperskich i produkcyjnych jak najbardziej podobnych.
11. **Logs:** Traktowanie logów jako strumienie zdarzeń.
12. **Admin processes:** Uruchamianie zadań administracyjnych jako jednorazowych procesów.

#### 5. Separacja kodu od konfiguracji
Zgodnie z zasadą 3 (Config) aplikacji 12-factor, konfiguracja, która zmienia się między środowiskami (staging, production), nie powinna znajdować się w kodzie.

**Złe podejście:**
```javascript
if (env === 'prod') {
  connect('db.prod.com');
} else {
  connect('localhost');
}
```

**Dobre podejście:**
```javascript
const dbUrl = process.env.DATABASE_URL;
connect(dbUrl);
```

#### 6. Bezstanowość (statelessness)
Aplikacja powinna być bezstanowa. Wszelkie dane, które muszą być trwałe, powinny być przechowywane w zewnętrznej bazie danych lub systemie plików.

**Dlaczego to ważne?**
*   **Skalowanie poziome:** Możemy uruchomić 10 instancji aplikacji, a balancer skieruje ruch do dowolnej z nich.
*   **Odporność na awarie:** Jeśli jedna instancja padnie, inna może przejąć jej zadania, bo nie przechowuje lokalnie danych sesji.
