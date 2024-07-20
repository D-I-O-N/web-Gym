<?php 

include "../db.php";

if ($_POST) {
    $fio_upload = $_POST['fio_upload'];
    $specialization_upload = $_POST['specialization_upload'];
    // $img_upload = $_POST['img_upload'];
    $short_desc_upload = $_POST['short_desc_upload'];
    $longt_desc_upload = $_POST['longt_desc_upload'];
    $quote_upload = $_POST['quote_upload'];
    $about_career_upload = $_POST['about_career_upload'];

    if(isset($_POST['upload'])) {
    if(!empty($_FILES['img_upload']['tmp_name'])) $img_upload= addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

    $res="";

    if ($db->query("INSERT INTO about_coaches SET fio='$fio_upload', specialization='$specialization_upload', img='$img_upload', short_desc='$short_desc_upload', longt_desc='$longt_desc_upload', quote='$quote_upload', `about career`='$about_career_upload'")) {
        $res = "Успешно добавлен!";
        
    } else {
        $res = $db->errorInfo()[2];
    }

    echo "<script>alert('$res')</script>";
}

header("Location: Admin.php");
exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Добавление коуча</h1>
        <label>Имя и Фамилия: <input name="fio_upload" type="text"></label>
        <label>Специализация: <input name="specialization_upload" type="text"></label>
        <label>Фото: <input type="file" name="img_upload"></label>
        <label>Короткое описание: <textarea name="short_desc_upload" cols="15" rows="5"></textarea></label>
        <label>Длинное описание: <textarea name="longt_desc_upload" cols="30" rows="10"></textarea></label>
        <label>Цитата: <input name="quote_upload" type="text"></label>
        <label>GyMisha о нем: <textarea name="about_career_upload" cols="30" rows="10"></textarea></label>
        <button name="upload">Добавить!</button>
    </form>

</body>
</html>
