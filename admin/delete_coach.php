<?php
// delete_coach.php

// Подключение к базе данных
include "../db.php";

// Обработка запроса на удаление коуча
if (isset($_POST['delete_submit'])) {
    $coach_id = $_POST['coach_id'];

    // Подготовленный запрос для удаления
    $stmt = $db->prepare("DELETE FROM about_coaches WHERE id = :coach_id");
    $stmt->bindParam(':coach_id', $coach_id, PDO::PARAM_INT);

    // Выполнение запроса
    if ($stmt->execute()) {
        echo "<script>alert('Коуч успешно удален.')</script>";
    } else {
        echo "<script>alert('Ошибка при удалении коуча.')</script>";
    }
}

// Перенаправление обратно на форму удаления
header("Location: Admin.php");
exit();
?>
