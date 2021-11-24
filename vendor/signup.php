<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];



    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login) > 0) {
        $_SESSION['message'] = 'Такой логин уже существует';
        header('Location: ../views/register.php');
        exit();
        
    }

    if ($password === $password_confirm) {

        
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`,  `login`,  `password`,`role_id`) VALUES (NULL, '$login', '$password', '1')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../views/login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../views/register.php');
    }

?>
