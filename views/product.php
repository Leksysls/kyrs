<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании</title>
    <link rel="stylesheet" href="../css/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header_about"> 
        <div class="main_wrapper header_wrapper">
            <div class="header_logo"><p>логотип</p></div>
            
            <div class="header_menu">
                <a href="#" class="header_menu-item">О компании</a>
                <a href="#" class="header_menu-item">Услуги</a>
                <a href="#" class="header_menu-item">Товари</a>
                <a href="#" class="header_menu-item">Контакты</a>
            </div>
            <div>
            <?php if(isset($_SESSION["user"])): ?>
                <a href="#" class="header_menu-item">Корзина</a>
                <?php endif; ?>
                <?php if(isset($_SESSION["user"])): ?>
                    <a href="../views/profile.php" class="header_menu-item">Личный кабинет </a>
                    <?php else: ?> 
                        <a href="../views/login.php" class="header_menu-item">Войти </a>
                      <?php endif; ?>   
                
                </div>
        </div>
    </header>
    <main class=" main_header_wrapper">
        <div class="main_wrapper">
            <div class="header_flex">
                
    
    </main>
</body>
<footer>
    <div class="main_wrapper footer_text">
        <div class="footer_colummn">
            <h1 class="footer_h1">PZOL</h1>
            <p class="footer_p">8 (800) 707-04-75</p>
            <p class="gray">г.Москва,ул.Лётная,99 ст3,офис 24 </p>
        </div>
        <div class="footer_column">
            <div class="footer_colummn_text">
                <h3>Ссылки</h3>
                <div class="footer_svg_media">
                    <svg width="35" height="21" viewBox="0 0 35 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.6722 1.38579C33.9119 0.587019 33.6722 0 32.5323 0H28.762C27.8032 0 27.3613 0.506988 27.122 1.06644C27.122 1.06644 25.2043 5.73962 22.4882 8.77542C21.6098 9.65423 21.2104 9.93414 20.7306 9.93414C20.4913 9.93414 20.1444 9.65423 20.1444 8.85583V1.38579C20.1444 0.427341 19.866 0 19.0672 0H13.1419C12.543 0 12.1823 0.444955 12.1823 0.866935C12.1823 1.77561 13.5405 1.98545 13.6807 4.54184V10.0938C13.6807 11.3111 13.4609 11.5325 12.9814 11.5325C11.7036 11.5325 8.5943 6.83784 6.75015 1.46621C6.38867 0.42198 6.02642 0.000382711 5.06299 0.000382711H1.29274C0.215202 -2.10363e-07 0 0.506989 0 1.06605C0 2.06471 1.27781 7.01781 5.95137 13.5685C9.06682 18.0417 13.4563 20.4672 17.4509 20.4672C19.8472 20.4672 20.144 19.9284 20.144 19.0006V15.6198C20.144 14.5422 20.3711 14.3274 21.13 14.3274C21.6891 14.3274 22.6475 14.6066 24.8846 16.7636C27.441 19.3199 27.8622 20.4668 29.3004 20.4668H33.0707C34.1474 20.4668 34.6862 19.928 34.3757 18.8654C34.0352 17.8059 32.8149 16.2688 31.1955 14.4473C30.3167 13.4088 28.9983 12.2903 28.5989 11.7308C28.0395 11.0121 28.1995 10.6927 28.5989 10.0532C28.5993 10.0536 33.1932 3.58262 33.6722 1.38579Z" fill="#CA3E47"/>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 7.06006C8.34578 7.06006 7 8.40584 7 10.0601C7 11.7143 8.34578 13.0601 10 13.0601C11.6542 13.0601 13 11.7143 13 10.0601C13 8.40584 11.6542 7.06006 10 7.06006Z" fill="#CA3E47"/>
                            <path d="M14.1596 0H5.84044C2.61489 0 0 2.61489 0 5.84044V14.1598C0 17.3851 2.61489 20 5.84044 20H14.1598C17.3851 20 20 17.3851 20 14.1596V5.84044C20 2.61489 17.3851 0 14.1596 0ZM10 15.262C7.13156 15.262 4.798 12.9284 4.798 10.0602C4.798 7.19178 7.13156 4.85822 10 4.85822C12.8682 4.85822 15.2018 7.19178 15.2018 10.0602C15.2018 12.9284 12.8682 15.262 10 15.262ZM15.316 4.87156C14.7024 4.87156 14.2049 4.374 14.2049 3.76044C14.2049 3.14689 14.7024 2.64933 15.316 2.64933C15.9296 2.64933 16.4271 3.14689 16.4271 3.76044C16.4271 4.374 15.9296 4.87156 15.316 4.87156Z" fill="#CA3E47"/>
                            </svg>
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.3798 0.133144L1.12051 8.33051C-0.330698 8.91265 -0.321898 9.72225 0.855973 10.0828L6.31066 11.7855L8.18667 17.9596C8.43334 18.6404 8.31174 18.9106 9.02694 18.9106C9.57868 18.9106 9.82241 18.6583 10.1304 18.3588L12.7814 15.7812L18.2963 19.8559C19.3113 20.4159 20.0438 20.1258 20.2966 18.9138L23.9171 1.85288C24.2878 0.366478 23.3507 -0.307658 22.3798 0.133144Z" fill="#CA3E47"/>
                                <path d="M9.05104 17.2692L7.25183 11.3481L21.1012 3.13208L10.8668 13.2087L9.05104 17.2692Z" fill="#414141"/>
                                </svg>
                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.76632 20.0722V10.93H9.83981L10.3126 7.35066H6.76632V5.07135C6.76632 4.0383 7.05469 3.33377 8.53713 3.33377H10.4143V0.142078C9.50037 0.0437243 8.58151 -0.00377978 7.66243 0.000234649C4.93886 0.000234649 3.07349 1.65507 3.07349 4.71674V7.35043H0V10.9297H3.07349V20.0722H6.76632Z" fill="#CA3E47"/>
                                    </svg>
                </div>
               
                                                                                                        
            </div>
            
        </div>
        
    </div>
    <div class="footer_border">

    </div>
    <div class="footer_footer ">
        <div class="main_wrapper">
                <p>© PZOL. Все права защищены</p>
        </div>
        
    </div>
</footer>
</html>