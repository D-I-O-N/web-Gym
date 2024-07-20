<?php
include "../db.php";

// Получаем список коучей для выпадающего списка
$sql = "SELECT id, fio FROM about_coaches";
$stmt = $db->prepare($sql);
$stmt->execute();
$coaches = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Coach</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <form action="process_update_coach.php" method="post" enctype="multipart/form-data">
        <h1>Изменение коуча</h1>
        <label>Выберите коача: 
            <select name="coach_id">
                <?php foreach ($coaches as $coach): ?>
                    <option value="<?= $coach['id'] ?>"><?= $coach['fio'] ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>Новое имя и фамилия: <input name="fio_update" type="text"></label>
        <label>Новая специализация: <input name="specialization_update" type="text"></label>
        <label>Новое фото: <input type="file" name="img_update"></label>
        <label>Новое короткое описание: <textarea name="short_desc_update" cols="15" rows="5"></textarea></label>
        <label>Новое длинное описание: <textarea name="longt_desc_update" cols="30" rows="10"></textarea></label>
        <label>Новая цитата: <input name="quote_update" type="text"></label>
        <label>Новый текст о нем: <textarea name="about_career_update" cols="30" rows="10"></textarea></label>
        <button>Изменить!</button>
    </form>
</body>
</html>
