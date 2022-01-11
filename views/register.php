<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Форма регистрации -->
    <div class="login_form">
    <div>
           <h1>Регистрация</h1>
        <p class="psg">Введите свой логин,пароль <br> и подтверждение пароля для регестрации</p> 
        </div>
    <form action="../vendor/signup.php" method="post" enctype="multipart/form-data">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <div class="down_button">
            <button type="submit" class="button">Зарегестрироваться</button>
             <a href="login.php" class="button">Войти</a>
        </div>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
        </div>

</body>
</html>