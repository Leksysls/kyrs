<?php
session_start(); 
require_once('../vendor/connect.php');

	$user_id = $_SESSION['id'];
	// $sqlsearch="SELECT * FROM ((users_cources left JOIN users ON users_cources.id = users.id) LEFT JOIN courcels ON users_cources.cource_id = courcels.cource_id) WHERE users.id='$user_id'";
	// $result=$connect->query($sqlsearch);
	// $courceResult=$result->fetch_all(MYSQLI_ASSOC);
	$sqlsearch = "SELECT * FROM users WHERE id = '$user_id'";
	$result=$connect->query($sqlsearch);
	$editusername = $result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<h1>Данные пользователя <?= $editusername['login'] ?></h1>
	<h2><a href="../views/adminpanel.php">Вернуться в админ панель</a></h2>
	<form action="../vendor/changerole.php" method="POST">
		<select name="role">
		<?php 
			$sqlsearch="SELECT * FROM roles";
			$result=$connect->query($sqlsearch);
			$arrResult=$result->fetch_all(MYSQLI_ASSOC);
			foreach ($arrResult as $row): ?>
			<option value="<?= $row['role_id'] ?>"><?= $row['role_name'] ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" name="changerole" value="Изменить роль">
	</form>
	
</body>
</html>