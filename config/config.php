<?php
// config/config.php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'eyydb');
define('DB_USER', 'eyyphp');
define('DB_PASS', 'eyyphp');

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Multilingual support: load language file (default en)
$lang = isset($_GET['lang']) && $_GET['lang'] == 'ja' ? 'ja' : 'en';
$translations = require_once "../app/lang/{$lang}.php";
?>
