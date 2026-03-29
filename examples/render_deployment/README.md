# Przewodnik: Wdrożenie aplikacji Docker na Render.com

Ten folder zawiera przykładową aplikację PHP (język nieobsługiwany natywnie przez Render, co wymaga użycia Dockera) oraz konfigurację niezbędną do jej uruchomienia na platformie [Render.com](https://render.com).

## 🚀 Instrukcja krok po kroku

### 1. Przygotowanie repozytorium
*   Upewnij się, że Twój kod znajduje się w repozytorium GitHub, GitLab lub Bitbucket.
*   Plik `Dockerfile` musi znajdować się w głównym katalogu projektu (lub musisz wskazać do niego ścieżkę w ustawieniach Render).

### 2. Tworzenie Web Serwisu na Render
1.  Zaloguj się do panelu [Render Dashboard](https://dashboard.render.com).
2.  Kliknij przycisk **New +** i wybierz **Web Service**.
3.  Wybierz swoje repozytorium z listy.
4.  W polu **Runtime** wybierz **Docker**.
5.  (Opcjonalnie) Jeśli plik Dockerfile jest w podfolderze (jak w tym przykładzie), w sekcji **Advanced** ustaw **Dockerfile Path** na `examples/render_deployment/php_app/Dockerfile` oraz **Build Context** na `examples/render_deployment/php_app/`.

### 3. Konfiguracja zmiennych środowiskowych
Render wymaga, aby aplikacja nasłuchiwała na porcie zdefiniowanym w zmiennej środowiskowej `$PORT`.
*   W naszym `Dockerfile` rozwiązaliśmy to za pomocą komendy `sed`, która podmienia port w konfiguracji Apache.
*   W przypadku innych technologii (np. Node.js), upewnij się, że startujesz serwer na `0.0.0.0:$PORT`.

---

## 🗄️ Obsługa Bazy Danych

Render oferuje dedykowane rozwiązanie **Managed PostgreSQL**, które jest najprostsze w konfiguracji.

### Opcja A: Render PostgreSQL (Zalecane)
1.  W panelu Render kliknij **New +** -> **PostgreSQL**.
2.  Po utworzeniu bazy, skopiuj **Internal Database URL**.
3.  W ustawieniach swojego Web Serwisu, w zakładce **Environment**, dodaj zmienną `DATABASE_URL` i wklej skopiowany link.

### Opcja B: Zewnętrzna baza (np. MongoDB Atlas, Supabase)
1.  Uzyskaj Connection String od dostawcy bazy.
2.  Dodaj go jako zmienną środowiskową w panelu Render (np. `DB_HOST`, `DB_PASSWORD`).

---

## ✅ Checklista wdrożeniowa

- [ ] Plik `Dockerfile` jest poprawny i przetestowany lokalnie (`docker build .`).
- [ ] Aplikacja obsługuje zmienną środowiskową `PORT`.
- [ ] Dodano plik `.dockerignore`, aby nie wysyłać zbędnych plików (np. `node_modules`).
- [ ] Wszystkie wrażliwe dane (hasła, klucze API) są przekazywane przez **Environment Variables** w panelu Render, a nie zapisane w kodzie.
- [ ] (Dla PHP) Zainstalowano niezbędne rozszerzenia (np. `pdo_mysql`) w Dockerfile.

---

## 🛠️ Dlaczego Docker?
Render natywnie wspiera Node.js, Python, Ruby, Go, Rust i Elixir. Używając Dockera, możesz uruchomić:
*   **PHP** (Laravel, Symfony, WordPress).
*   **Java** (Spring Boot).
*   **C#** (.NET).
*   Dowolną inną technologię z własnymi zależnościami systemowymi.
