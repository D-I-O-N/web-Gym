<?php 

try {
$db = new PDO("mysql:host=localhost;dbname=gymisha_db;charset=utf8mb4", "root", "");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}


?>