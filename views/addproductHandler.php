<?php 
session_start();
require_once('../vendor/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cource Edit</title>
	<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<h1>Курс <?= $arrResult['cource_name'] ?></h1>
	<form action="../vendor/addproduct.php" method="POST">
		<?php $_SESSION['item_id']=$arrResult['item_id'] ?>
		<p>Название</p>
		<input type="text" name="courcename" value="<?= $arrResult['cource_name'] ?>" >
		<p>опсание</p>
		<textarea name="description" value="<?= $arrResult['cource_description'] ?>"></textarea>
		<p>Цена</p>
		<input type="text" name="price" value="<?= $arrResult['price'] ?>">
		<p>Мощность</p>
		<input type="text" name="asic_consumption" value="<?= $arrResult['asic_consumption'] ?>">
		<p>Алгоритм</p>
		<input type="text" name="algorithm" value="<?= $arrResult['algorithm'] ?>">
		<p>Валюты</p>
		<input type="text" name="currencies" value="<?= $arrResult['currencies'] ?>">
		<p>Вычислений в секунду</p>
		<input type="text" name="hashrate" value="<?= $arrResult['hashrate'] ?>">
		<p>Фотокарточка</p>
		<input type="file" name="img">
		<input type="submit" name="save" value="Сохранить">
	</form>
</body>
</html>