<?php
$DB_HOST = "localhost";
$DB_NAME = "YOUR_DB_NAME";
$DB_USER = "YOUR_DB_USER";
$DB_PASS = "YOUR_DB_PASS";

$pdo = new PDO(
    "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8",
    $DB_USER,
    $DB_PASS,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
