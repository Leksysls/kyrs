<?php 
session_start();
require_once('connect.php');


// if(isset($_POST['save'])){
//     $uploaddir = "img/";
//     $uploadfile = $uploaddir.basename($_FILES['img']['name']);

//     if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)){
        $item_id = $_SESSION['item_id'];
        $cource_name = $_POST['courcename'];
        $description = $_POST['description'];
        $price=$_POST['price'];
        $asic_consumption=$_POST['asic_consumption'];
        $algorithm=$_POST['algorithm'];
        $currencies=$_POST['currencies'];
        $hashrate=$_POST['hashrate'];

        $sqlinsert="INSERT INTO `courcels` (`item_id`, `cource_name`, `cource_description`, `price`, `asic_consumption`, `algorithm`, `currencies`, `hashrate`, `cource_img_path`) 
        VALUES (NULL, '$cource_name', '$description', '$price', '$asic_consumption', '$algorithm', '$currencies', '$hashrate', '$uploadfile')";

        $result=$connect->query($sqlinsert);
        if($result){
            header('location:../views/adminpanel.php');
        }
        else{
            echo "Ошибка";
        }
//     }
// }

// header('Location: ../views/adminpanel.php');
?>