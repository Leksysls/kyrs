<?php 
session_start();
require_once('connect.php');
if(isset($_POST['edit'])): 
	$edited = $_POST['edit'];
	$sqlsearch = "SELECT * FROM courcels WHERE item_id = '$edited'";
	$result = $connect->query($sqlsearch);
	$arrResult = $result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
	<title>Product Edit</title>
</head>
<body>
	<h1>Название товара <?= $arrResult['cource_name'] ?></h1>
	<form action="../vendor/editproduct.php" method="POST">
		<?php $_SESSION['item_id']=$arrResult['item_id'] ?>
		<p>Название</p>
		<input type="text" name="courcename" value="<?= $arrResult['cource_name'] ?>" >
		<p>опсание</p>
		<textarea name="description"><?= $arrResult['cource_description'] ?></textarea>
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
<?php
endif;
if(isset($_POST['delete'])){
	$deleted = $_POST['delete'];
	$sqldelete = "DELETE FROM courcels WHERE item_id = '$deleted'";
	$result = $connect->query($sqldelete);
	header('Location: ../views/adminpanel.php');
}
?>