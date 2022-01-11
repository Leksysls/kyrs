<?php 
session_start();
require_once('../vendor/addinguserhandler.php'); 
?>

  <!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>Add user</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
	<section id="content">
		<!--<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">-->
		<h1><a href="../views/adminpanel.php">Назад в админ панель</a></h1>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
			<h1>Registration Form</h1>
			<div>
				<input type="text" placeholder="Username" id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" id="password" name="password"/>
			</div>
			
			
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        
        <div>
				<input type="submit" value="Registrate" name="reg" id="reg"/>
			</div>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->

</html>
