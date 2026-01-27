# Wykład 6: Zarządzanie obrazami i kontenerami Docker

## Czas trwania: 2 godziny

### Agenda:
1. Budowanie własnych obrazów – struktura pliku `Dockerfile`.
2. Warstwy obrazu i mechanizm cache'owania.
3. Optymalizacja obrazów (Multi-stage builds, obrazy typu alpine).
4. Zarządzanie kontenerami: exec, logs, inspect, stop, rm.
5. Przekierowanie portów i mapowanie wolumenów.
6. Dobre praktyki tworzenia plików Dockerfile.

### Treść:
Zrozumienie jak budowane są obrazy pozwala na tworzenie wydajnych i bezpiecznych kontenerów. Kluczowe jest minimalizowanie liczby warstw oraz rozmiaru obrazu końcowego. Mapowanie portów umożliwia dostęp do usług wewnątrz kontenera, a wolumeny pozwalają na trwałe przechowywanie danych poza cyklem życia kontenera.
