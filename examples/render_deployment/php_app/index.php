<?php
// Pobranie portu ze zmiennej środowiskowej (Render przypisuje go dynamicznie)
$port = getenv('PORT') ?: 80;

// Informacja o połączeniu z bazą danych (przykład konfiguracji)
$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbName = getenv('DB_NAME') ?: 'test_db';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASS') ?: '';

// Sprawdzenie, czy to żądanie to tylko sprawdzenie stanu (Health Check)
if ($_SERVER['REQUEST_REQUEST_URI'] === '/health') {
    http_response_code(200);
    echo "OK";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Aplikacja PHP na Render.com</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background-color: #f4f4f9; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #4a90e2; }
        .status { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Witaj na Render.com!</h1>
        <p>Twoja aplikacja PHP działa wewnątrz kontenera <strong>Docker</strong>.</p>
        <p>Aplikacja nasłuchuje na porcie: <code><?php echo htmlspecialchars($port); ?></code></p>
        
        <hr>
        
        <h3>Konfiguracja Bazy Danych:</h3>
        <ul>
            <li>Host: <code><?php echo htmlspecialchars($dbHost); ?></code></li>
            <li>Baza: <code><?php echo htmlspecialchars($dbName); ?></code></li>
            <li>Użytkownik: <code><?php echo htmlspecialchars($dbUser); ?></code></li>
        </ul>
        
        <p class="status">Połączenie z serwerem: Sukces!</p>
    </div>
</body>
</html>
