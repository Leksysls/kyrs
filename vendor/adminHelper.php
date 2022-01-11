<?php 
session_start();
require_once('../vendor/connect.php');

    $sqlsearch="SELECT * FROM users LEFT JOIN roles ON users.role_id = roles.role_id";
    $result=$connect->query($sqlsearch);
    $arrResultRoles=$result->fetch_all(MYSQLI_ASSOC);

    $sqlsearch="SELECT * FROM courcels ";
    $result=$connect->query($sqlsearch);
    $arrResultProduct=$result->fetch_all(MYSQLI_ASSOC);
    
?>