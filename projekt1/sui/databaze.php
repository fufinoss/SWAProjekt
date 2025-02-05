<?php
$host = 'localhost';
$db = 'radosinskyf_';
$user = 'radosinskyf'; // Změňte na uživatele MySQL
$pass = 'In7zulin1886+-'; // Heslo k MySQL (pokud existuje)

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die('Připojení k databázi selhalo: ' . $conn->connect_error);
}
?>
