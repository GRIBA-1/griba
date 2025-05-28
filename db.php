<?php
// db.php

$host = 'localhost';          // Π.χ. localhost ή IP server
$dbname = 'real_estate_db';  // Η βάση που δημιούργησες
$username = 'root';           // Το username του MySQL
$password = '';               // Ο κωδικός πρόσβασης

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Ρύθμιση σφαλμάτων για εύκολη αναφορά
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Αν δεν συνδεθεί, τερματίζει και εμφανίζει το μήνυμα
    die("Σφάλμα σύνδεσης στη βάση δεδομένων: " . $e->getMessage());
}
