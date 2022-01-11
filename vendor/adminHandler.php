<?php
session_start();
require_once('../vendor/connect.php');
if(isset($_POST['edit'])){
$_SESSION['id']= $_POST['user'];
header('Location: ../vendor/edit.php');
}
else if(isset($_POST['delete'])){
	$id_user = $_POST['user'];
	$sqldelete = "DELETE FROM users WHERE id=".$id_user;
	$result=$connect->query($sqldelete);
	header('Location: ../views/adminpanel.php');
}
?>
