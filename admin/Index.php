<?php
session_start();

// Предполагаем, что у вас есть админ-пароль (замените его на свой)
$adminPassword = "admin";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredPassword = $_POST['password'];

    if ($enteredPassword === $adminPassword) {
        $_SESSION['admin'] = true;
        header("Location: Admin.php"); // Перенаправим на главную страницу админки
        exit();
    } else {
        $error = "Неверный пароль";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>
    <form action="" method="post">
        <label>Password: <input type="password" name="password"></label>
        <button type="submit">Login</button>
    </form>

    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
