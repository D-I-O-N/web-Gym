<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <h1>Удаление коуча</h1>

<form action="delete_coach.php" method="post">
    <label for="coach_id">Выберите коуча для удаления:</label>
    <select name="coach_id" id="coach_id" required>
        <!-- Здесь нужно динамически формировать варианты выбора коучей из базы данных -->
        <?php
            // Подключение к базе данных
            include "../db.php";

            // Получение списка коучей
            $query = $db->query("SELECT id, fio FROM about_coaches");
            while ($coach = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$coach['id']}'>{$coach['fio']}</option>";
            }
        ?>
    </select>

    <button type="submit" name="delete_submit">Удалить</button>
</body>
</html>