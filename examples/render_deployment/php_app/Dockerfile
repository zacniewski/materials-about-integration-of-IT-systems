# Etap 1: Obraz bazowy
# Używamy oficjalnego obrazu PHP z Apache (wersja slim dla optymalizacji)
FROM php:8.2-apache-bullseye

# Etap 2: Konfiguracja Apache
# Render automatycznie przekierowuje ruch na port 80 (standard Apache)
# Jeśli Twoja aplikacja wymaga nasłuchiwania na porcie z zmiennej $PORT:
RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf
RUN sed -i 's/:80/:${PORT}/' /etc/apache2/sites-available/000-default.conf

# Etap 3: Instalacja rozszerzeń (opcjonalnie, np. do bazy danych)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Etap 4: Kopiowanie plików aplikacji
# Kopiujemy kod do standardowej ścieżki Apache
COPY . /var/www/html/

# Etap 5: Uprawnienia
# Zmiana właściciela na www-data (użytkownik Apache)
RUN chown -R www-data:www-data /var/www/html

# Etap 6: Uruchomienie
# Apache uruchamia się domyślnie przy starcie kontenera
# Używamy skryptu startowego, by upewnić się, że porty są poprawnie skonfigurowane
CMD ["apache2-foreground"]
