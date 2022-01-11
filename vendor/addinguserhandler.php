<?php
	session_start();
	require_once('../vendor/connect.php');
	// if(!isset($_SESSION['username']) || $_SESSION['role_id']!=2){
	// 	header('Location: ../views/product.php');
	// }
	if(isset($_POST['reg'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		
		

		$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$username'");
		if(!$username){
			$_SESSION['message'] = 'Логин не может быть пустым';
			header('Location: ../views/addinguser.php');
			
			exit();
		}
    	elseif (mysqli_num_rows($check_login) > 0) {
        $_SESSION['message'] = 'Такой логин уже существует';
		
        header('Location: ../views/addinguser.php');
        exit();
        
    	}

		if ($password === $password_confirm) {

			
			$password = md5($password);

			mysqli_query($connect, "INSERT INTO `users` (`id`,  `login`,  `password`,`role_id`) VALUES (NULL, '$username', '$password', '1')");

			$_SESSION['message'] = 'Регистрация прошла успешно!';
			header('Location: ../views/login.php');


		} else {
			$_SESSION['message'] = 'Пароли не совпадают';
			header('Location: ../views/register.php');
		}

		
	}
	

?>