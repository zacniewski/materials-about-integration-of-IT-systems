# Przewodnik: Wdrożenie aplikacji Docker na Render.com lub Leapcell.io

Ten folder zawiera przykładową aplikację PHP (język nieobsługiwany natywnie przez wiele platform PaaS, co wymaga użycia Dockera) oraz konfigurację niezbędną do jej uruchomienia na platformach [Render.com](https://render.com) lub [Leapcell.io](https://leapcell.io).

## 🚀 Instrukcja krok po kroku

### 1. Przygotowanie repozytorium
*   Upewnij się, że Twój kod znajduje się w repozytorium GitHub, GitLab lub Bitbucket.
*   Plik `Dockerfile` musi znajdować się w głównym katalogu projektu (lub musisz wskazać do niego ścieżkę w ustawieniach Render).

### 2. Tworzenie Web Serwisu na platformie

#### Opcja A: Render.com
1.  Zaloguj się do panelu [Render Dashboard](https://dashboard.render.com).
2.  Kliknij przycisk **New +** i wybierz **Web Service**.
3.  Wybierz swoje repozytorium z listy.
4.  W polu **Runtime** wybierz **Docker**.
5.  (Opcjonalnie) Jeśli plik Dockerfile jest w podfolderze (jak w tym przykładzie), w sekcji **Advanced** ustaw **Dockerfile Path** na `examples/render_deployment/php_app/Dockerfile` oraz **Build Context** na `examples/render_deployment/php_app/`.

#### Opcja B: Leapcell.io
1.  Zaloguj się do panelu [Leapcell Dashboard](https://leapcell.io).
2.  Stwórz nowy projekt i połącz go ze swoim repozytorium GitHub.
3.  Wybierz typ wdrożenia **Docker**.
4.  Wskaż ścieżkę do Dockerfile (np. `examples/render_deployment/php_app/Dockerfile`), jeśli nie jest on w głównym katalogu.
5.  Leapcell automatycznie zajmie się procesem budowania i wdrażania.

### 3. Konfiguracja zmiennych środowiskowych
Render oraz Leapcell wymagają, aby aplikacja nasłuchiwała na porcie zdefiniowanym w zmiennej środowiskowej `$PORT`.
*   W naszym `Dockerfile` rozwiązaliśmy to za pomocą komendy `sed`, która podmienia port w konfiguracji Apache.
*   W przypadku innych technologii (np. Node.js), upewnij się, że startujesz serwer na `0.0.0.0:$PORT`.

---

## 🗄️ Obsługa Bazy Danych

Obie platformy oferują zarządzane bazy danych PostgreSQL.

### Opcja A: Zarządzany PostgreSQL (Zalecane)
1.  **Render:** W panelu kliknij **New +** -> **PostgreSQL**.
2.  **Leapcell:** Stwórz nową usługę bazy danych w swoim projekcie.
3.  Po utworzeniu bazy, skopiuj URL połączenia (np. **Internal Database URL** na Render).
4.  W ustawieniach swojego serwisu, w zakładce **Environment** (lub **Secrets**), dodaj zmienną `DATABASE_URL` i wklej skopiowany link.

### Opcja B: Zewnętrzna baza (np. MongoDB Atlas, Supabase)
1.  Uzyskaj Connection String od dostawcy bazy.
2.  Dodaj go jako zmienną środowiskową w panelu Render (np. `DB_HOST`, `DB_PASSWORD`).

---

## ✅ Checklista wdrożeniowa

- [ ] Plik `Dockerfile` jest poprawny i przetestowany lokalnie (`docker build .`).
- [ ] Aplikacja obsługuje zmienną środowiskową `PORT`.
- [ ] Dodano plik `.dockerignore`, aby nie wysyłać zbędnych plików (np. `node_modules`).
- [ ] Wszystkie wrażliwe dane (hasła, klucze API) są przekazywane przez **Environment Variables** w panelu administracyjnym platformy, a nie zapisane w kodzie.
- [ ] (Dla PHP) Zainstalowano niezbędne rozszerzenia (np. `pdo_mysql`) w Dockerfile.

---

## 🛠️ Dlaczego Docker?
Render natywnie wspiera Node.js, Python, Ruby, Go, Rust i Elixir. Używając Dockera, możesz uruchomić:
*   **PHP** (Laravel, Symfony, WordPress).
*   **Java** (Spring Boot).
*   **C#** (.NET).
*   Dowolną inną technologię z własnymi zależnościami systemowymi.
