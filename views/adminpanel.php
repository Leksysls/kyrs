<?php 
session_start();
require_once('../vendor/connect.php');
require_once('../vendor/adminHelper.php');
if($_SESSION['role_id']!=2 || !isset($_SESSION['user'])) 
	header('Location: ../index.php');
// 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<a href="../views/profile.php">Назад</a>
	<h1>Пользователи</h1>
	<form action="../vendor/adminHandler.php" method="POST">
		<select name="user">
			<?php foreach ($arrResultRoles as $row): ?>
				<option value="<?= $row['id'] ?>"><?= $row['login'] ?> - <?= $row['role_name'] ?></option>
			<?php endforeach; ?>
		</select>
		<input type="submit" name="edit" value="Изменить">
		<input type="submit" name="delete" value="Удалить">

	</form>
	<a href="../views/addinguser.php">Добавить пользователя</a>


	<h1>Товары</h1>
	<form action="../vendor/producthandler.php" method="POST">
		<table border="2">
			<tr>
				<td>Товар</td>
				<td colspan="2">Действие</td>
			</tr>
			<?php 
			$sqlsearch="SELECT * FROM courcels";
			$result=$connect->query($sqlsearch);
			$arrResult=$result->fetch_all(MYSQLI_ASSOC);
			foreach ($arrResult as $row):
			 ?>
			 <tr>
			 	<td><?= $row['cource_name'] ?></td>
			 	<td><input type="submit" name="edit" value="<?= $row['item_id'] ?>">Изменить</input></td>
			 	<td><input type="submit" name="delete" value="<?= $row['item_id'] ?>">Удалить</input></td>
			 </tr>
			<?php endforeach; ?>
		</table>
	</form>
	<a href="../views/addproductHandler.php">Добавить курс</a>

	
</body>
</html>