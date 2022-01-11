<?php 
session_start();
require_once('connect.php');

// $item_id = $_SESSION['item_id'];
// $cource_name = $_POST['courcename'];
// $description = $_POST['description'];
// $price=$_POST['price'];
// $asic_consumption=$_POST['asic_consumption'];
// $algorithm=$_POST['algorithm'];
// $currencies=$_POST['currencies'];
// $hashrate=$_POST['hashrate'];

if (isset($_POST['save']))
{

    $target_img="img/".basename($_FILES['img']['name']); //путь, где лежит файл картинки
    // var_dump($target_img);
    $picture=$_FILES['img']['name'];

    $item_id = $_SESSION['item_id'];
    $cource_name = $_POST['courcename'];
    $description = $_POST['description'];
    $price=$_POST['price'];
    $asic_consumption=$_POST['asic_consumption'];
    $algorithm=$_POST['algorithm'];
    $currencies=$_POST['currencies'];
    $hashrate=$_POST['hashrate'];
    $sqlupdate="UPDATE `courcels` SET `cource_name`='$cource_name',`cource_description`='$description',`price`='$price',`asic_consumption`='$asic_consumption',
    `algorithm`='$algorithm',`currencies`='$currencies',`hashrate`='$hashrate',`cource_img_path`='$picture' WHERE `item_id`='$item_id'";
    $result=$connect->query($sqlupdate, MYSQLI_USE_RESULT);

    //перемещение загруженного изображения в папку "img"....
    if (@move_uploaded_file($_FILES['img']['tmp_name'],$target_img))
    {
        $msg="Файл картинки загружен успешно";
    }
    else
    {
        $msg="Возникли проблемы с загрузкой файла";
    }
}

// if(isset($_POST['save'])){
//     // $uploadfile = $_POST['oldpath'];
//     if(isset($_FILES['img'])){
//         $uploaddir = "img/";
//         $uploadfile = $uploaddir.basename($_FILES['img']['name']);
//         move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
//     }
//     $item_id = $_SESSION['item_id'];
//     $cource_name = $_POST['courcename'];
//     $description = $_POST['description'];
//     $price=$_POST['price'];
//     $asic_consumption=$_POST['asic_consumption'];
//     $algorithm=$_POST['algorithm'];
//     $currencies=$_POST['currencies'];
//     $hashrate=$_POST['hashrate'];
//     $sqlupdate="UPDATE `courcels` SET `cource_name`='$cource_name',`cource_description`='$description',`price`='$price',`asic_consumption`='$asic_consumption',
//     `algorithm`='$algorithm',`currencies`='$currencies',`hashrate`='$hashrate',`cource_img_path`='$uploadfile' WHERE `item_id`='$item_id'";
//     $result=$connect->query($sqlupdate, MYSQLI_USE_RESULT);
//     echo "$sqlupdate";
    // if($result){
    //     header('location:../views/adminpanel.php');
    // }
    // else{
    //     echo "Ошибка";
    // }
// }
// $sqlupdate="UPDATE `courcels` SET `cource_name`='$cource_name',`cource_description`='$description',`price`='$price',`asic_consumption`='$asic_consumption',
// `algorithm`='$algorithm',`currencies`='$currencies',`hashrate`='$hashrate',`cource_img_path`='$path' WHERE `item_id`='$item_id'";
// $result=$connect->query($sqlupdate);
header('Location: ../views/adminpanel.php');
?>