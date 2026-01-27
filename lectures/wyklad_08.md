# Wykład 8: Integracja baz danych w środowisku kontenerowym

## Czas trwania: 2 godziny

### Agenda:
1. Rodzaje baz danych i ich konteneryzacja (SQL vs NoSQL).
2. Trwałość danych: Wolumeny (Volumes) i montowanie katalogów (Bind mounts).
3. Inicjalizacja baz danych skryptami (docker-entrypoint-initdb.d).
4. Zarządzanie sekretami i danymi uwierzytelniającymi w kontenerach.
5. Narzędzia administracyjne w kontenerach (np. pgAdmin, phpMyAdmin).
6. Backup i przywracanie danych w środowisku Docker.

### Treść:

#### 1. Rodzaje baz danych i konteneryzacja
Bazy danych dzielimy na relacyjne (SQL) i niererelacyjne (NoSQL). Każda z nich może być uruchomiona w kontenerze.

| Typ | Przykłady | Charakterystyka w Dockerze |
| :--- | :--- | :--- |
| **SQL** | PostgreSQL, MySQL, MariaDB | Wymagają trwałych wolumenów, często inicjalizowane skryptami SQL. |
| **NoSQL** | MongoDB, Redis, Cassandra | Często używane jako cache lub bazy dokumentowe, łatwe w skalowaniu. |

#### 2. Trwałość danych (Persistence)
Kontenery są z natury ulotne. Aby nie stracić danych po usunięciu kontenera, stosujemy:

*   **Volumes:** Zarządzane przez Docker. Najlepszy sposób na trwałość danych.
*   **Bind Mounts:** Mapowanie konkretnego folderu z hosta do kontenera (przydatne w developmentcie).

```yaml
services:
  db:
    image: postgres
    volumes:
      - db_data:/var/lib/postgresql/data # Volume
      - ./init.sql:/docker-entrypoint-initdb.d/init.sql # Bind mount
volumes:
  db_data:
```

#### 3. Inicjalizacja baz danych
Większość oficjalnych obrazów baz danych (Postgres, MySQL, MariaDB, MongoDB) posiada mechanizm automatycznego wykonywania skryptów przy pierwszym uruchomieniu.
*   Wystarczy podmontować pliki `.sql` lub `.sh` do katalogu `/docker-entrypoint-initdb.d/`.

#### 4. Zarządzanie sekretami
Hasła do baz danych nigdy nie powinny być wpisane bezpośrednio w `Dockerfile` ani w `docker-compose.yml` przesyłanym do repozytorium.

**Metody bezpieczne:**
*   Pliki `.env` (wykluczone z Gita przez `.gitignore`).
*   Docker Secrets (dostępne w Docker Swarm / Kubernetes).
*   Zewnętrzne systemy (HashiCorp Vault, AWS Secrets Manager).

#### 5. Narzędzia administracyjne
Aby ułatwić pracę z bazami w kontenerach, często dodajemy do stosu technologicznego narzędzia z interfejsem graficznym (GUI).

**Przykłady integracji w docker-compose:**
```yaml
  adminer:
    image: adminer
    ports:
      - 8080:8080
  pgadmin:
    image: dpage/pgadmin4
    environment:
      PGADMIN_DEFAULT_EMAIL: admin@admin.com
      PGADMIN_DEFAULT_PASSWORD: admin
    ports:
      - "5050:80"
```

#### 6. Backup i przywracanie danych
Wykonanie kopii zapasowej bazy działającej w kontenerze wymaga użycia narzędzi wewnątrz kontenera.

**Przykład backupu PostgreSQL:**
```bash
docker exec -t db_container pg_dumpall -c -U postgres > dump_`date +%d-%m-%Y"_"%H_%M_%S`.sql
```

**Przykład przywracania:**
```bash
cat dump.sql | docker exec -i db_container psql -U postgres
```
