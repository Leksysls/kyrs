<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: product.php');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<header >
    <div class="main_wrapper">
        <div class="center">
            <a href="../views/product.php">Назад к товарам</a>
        </div>
        
    </div>
</header>
    <main class="main_wrapper">
        <div class="menu_profile">
            <h2><?= $_SESSION['user']['login'] ?></h2>
        

            <?php if ($_SESSION['role_id']==2): ?>
            <a href="../views/adminpanel.php">Админ панель</a>
            <?php endif; ?>
            <a href="../vendor/logout.php" class="logout">Выход</a>
        </div>
        
    </main>
    
        
        
        
        

    

</body>
</html>