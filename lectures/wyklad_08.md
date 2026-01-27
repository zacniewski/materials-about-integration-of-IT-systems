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
Bazy danych wymagają szczególnego podejścia w konteneryzacji ze względu na konieczność zachowania stanu. Podczas wykładu omówione zostaną mechanizmy zapewniające trwałość danych oraz bezpieczne metody przekazywania haseł i konfiguracji do kontenerów bazodanowych, co jest niezbędne w procesie integracji usług.
