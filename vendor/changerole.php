<?php 
session_start();
require_once('../vendor/connect.php');
// if(!isset($_SESSION['username']) || $_SESSION['role_id']!=2){
// 		header('Location: index.php');
// }
$role = $_POST['role'];
$user = $_SESSION['id'];
$sqlupdate="UPDATE users SET role_id = '$role' WHERE id='$user'";
$result=$connect->query($sqlupdate);
header('Location: ../vendor/edit.php');
 ?>