<?php
include "../db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $coach_id = $_POST['coach_id'];
    $fio_update = $_POST['fio_update'];
    $specialization_update = $_POST['specialization_update'];
    $short_desc_update = $_POST['short_desc_update'];
    $longt_desc_update = $_POST['longt_desc_update'];
    $quote_update = $_POST['quote_update'];
    $about_career_update = $_POST['about_career_update'];

    // Обработка загруженного файла
    $img_update = $_FILES['img_update']['name'];
    $img_temp_update = $_FILES['img_update']['tmp_name'];
    $img_path_update = "../uploads/" . basename($img_update);

    if (!empty($img_temp_update)) {
        move_uploaded_file($img_temp_update, $img_path_update);
    }

    $stmt = $db->prepare("UPDATE about_coaches 
                          SET fio = ?, specialization = ?, img = ?, short_desc = ?, longt_desc = ?, quote = ?, `about career` = ?
                          WHERE id = ?");
    $stmt->execute([$fio_update, $specialization_update, $img_path_update, $short_desc_update, $longt_desc_update, $quote_update, $about_career_update, $coach_id]);

    echo "<script>alert('Данные успешно изменены!')</script>";
    header("Location: Admin.php");
    exit();
}
?>
