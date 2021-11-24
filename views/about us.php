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
    <link rel="stylesheet" href="../css/style.css">
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
                <h1 class="main_header">ВЕДУЩИЙ ПОСТАВЩИК <br>
                ОБОРУДОВАНИЯ ДЛЯ МАЙНИНГА <br>
                В РОССИИ</h1>
            <div class="main_header-svg"><svg width="122" height="122" viewBox="0 0 122 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M91.5 20.3334H30.5C24.8851 20.3334 20.3334 24.8851 20.3334 30.5V91.5C20.3334 97.1149 24.8851 101.667 30.5 101.667H91.5C97.1149 101.667 101.667 97.1149 101.667 91.5V30.5C101.667 24.8851 97.1149 20.3334 91.5 20.3334Z" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M76.25 45.75H45.75V76.25H76.25V45.75Z" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M45.75 5.08337V20.3334" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M76.25 5.08337V20.3334" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M45.75 101.667V116.917" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M76.25 101.667V116.917" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M101.667 45.75H116.917" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M101.667 71.1666H116.917" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.08337 45.75H20.3334" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.08337 71.1666H20.3334" stroke="#CA3E47" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            </div>
            
            <div class="violation_wrapper">
                <div class="violation">
                    <div class="violation_svg-wrapper">	
                        <svg width="56" height="56" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9165 46.25H21.5831C19.8873 46.25 18.4998 44.8625 18.4998 43.1666C18.4998 41.4708 19.8873 40.0833 21.5831 40.0833H33.9165C35.6123 40.0833 36.9998 41.4708 36.9998 43.1666C36.9998 44.8625 35.6123 46.25 33.9165 46.25ZM52.4165 46.25H46.2498C44.554 46.25 43.1665 44.8625 43.1665 43.1666C43.1665 41.4708 44.554 40.0833 46.2498 40.0833H52.4165C54.1123 40.0833 55.4998 41.4708 55.4998 43.1666C55.4998 44.8625 54.1123 46.25 52.4165 46.25ZM61.6665 49.3333C61.6665 51.0323 60.2852 52.4166 58.5832 52.4166H15.4165C13.7145 52.4166 12.3332 51.0323 12.3332 49.3333V33.9166H61.6665V49.3333ZM12.3332 24.6666C12.3332 22.9678 13.7145 21.5833 15.4165 21.5833H58.5832C60.2852 21.5833 61.6665 22.9678 61.6665 24.6666V27.75H12.3332V24.6666ZM58.5832 15.4166H15.4165C10.3167 15.4166 6.1665 19.5668 6.1665 24.6666V49.3333C6.1665 54.4331 10.3167 58.5833 15.4165 58.5833H58.5832C63.683 58.5833 67.8332 54.4331 67.8332 49.3333V24.6666C67.8332 19.5668 63.683 15.4166 58.5832 15.4166Z" fill="#CA3E47"/>
                            </svg>                        
                    </div>
                    <div class="violation_header">
                        <h3>ЛЮБЫЕ ФОРМЫ ОПЛАТЫ</h3>
                    </div>
                </div>
                <div class="violation">
                    <div class="violation_img-wrapper">	
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.6667 7.00004H22.1706C21.5214 7.00004 21 7.52042 21 8.16216V38.5046C21 39.1519 21.5148 39.6667 22.1563 39.6667H43.1771C43.8122 39.6667 44.3333 39.1441 44.3333 38.4984V18.6667H35C33.7113 18.6667 32.6667 17.622 32.6667 16.3334V7.00004ZM16.3333 11.6667V8.16216C16.3333 4.94111 18.946 2.33337 22.1706 2.33337H35C35.6188 2.33337 36.2123 2.57921 36.6499 3.01679L48.3166 14.6835C48.7542 15.121 49 15.7145 49 16.3334V38.4984C49 41.7184 46.3925 44.3334 43.1771 44.3334H39.6667V47.8318C39.6667 51.0518 37.0591 53.6667 33.8437 53.6667H12.8229C9.60413 53.6667 7 51.0625 7 47.8379V17.4955C7 14.2744 9.61268 11.6667 12.8372 11.6667H16.3333ZM16.3333 16.3334H12.8372C12.188 16.3334 11.6667 16.8538 11.6667 17.4955V47.8379C11.6667 48.4852 12.1815 49 12.8229 49H33.8437C34.4788 49 35 48.4774 35 47.8318V44.3334H22.1563C18.9375 44.3334 16.3333 41.7292 16.3333 38.5046V16.3334ZM26.8333 28C25.5447 28 24.5 26.9554 24.5 25.6667C24.5 24.378 25.5447 23.3334 26.8333 23.3334H38.5C39.7887 23.3334 40.8333 24.378 40.8333 25.6667C40.8333 26.9554 39.7887 28 38.5 28H26.8333ZM26.8333 35C25.5447 35 24.5 33.9554 24.5 32.6667C24.5 31.378 25.5447 30.3334 26.8333 30.3334H33.8333C35.122 30.3334 36.1667 31.378 36.1667 32.6667C36.1667 33.9554 35.122 35 33.8333 35H26.8333ZM37.3333 14H41.0335L37.3333 10.2999V14Z" fill="#CA3E47"/>
                            </svg>                        
                    </div>
                    <div class="violation_header">
                        <h3>ПОЛНЫЙ НАБОР
                            ДОКУМЕНТОВ</h3>
                    </div>
                </div>
                <div class="violation">
                    <div class="violation_img-wrapper">	
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.6668 11.6667C19.2235 11.6667 14.0002 16.89 14.0002 23.3333V42H7.00016C4.42283 42 2.3335 39.9107 2.3335 37.3333V28C2.3335 25.4227 4.42283 23.3333 7.00016 23.3333H9.3335C9.3335 14.3127 16.6462 7 25.6668 7H30.3335C39.3541 7 46.6668 14.3127 46.6668 23.3333H49.0002C51.5775 23.3333 53.6669 25.4227 53.6669 28V37.3333C53.6669 39.9107 51.5775 42 49.0002 42H46.3728C45.3367 46.0255 41.6825 49 37.3335 49H34.3758C33.5689 50.3949 32.0608 51.3333 30.3335 51.3333C27.7561 51.3333 25.6668 49.244 25.6668 46.6667C25.6668 44.0893 27.7561 42 30.3335 42C32.0608 42 33.5689 42.9385 34.3758 44.3333H37.3335C39.9108 44.3333 42.0002 42.244 42.0002 39.6667V25.6667V23.3333C42.0002 16.89 36.7768 11.6667 30.3335 11.6667H25.6668ZM9.3335 28H7.00016V37.3333H9.3335V28ZM25.6668 28.5833C25.6668 30.1942 24.361 31.5 22.7502 31.5C21.1393 31.5 19.8335 30.1942 19.8335 28.5833C19.8335 26.9725 21.1393 25.6667 22.7502 25.6667C24.361 25.6667 25.6668 26.9725 25.6668 28.5833ZM33.2502 31.5C34.861 31.5 36.1668 30.1942 36.1668 28.5833C36.1668 26.9725 34.861 25.6667 33.2502 25.6667C31.6393 25.6667 30.3335 26.9725 30.3335 28.5833C30.3335 30.1942 31.6393 31.5 33.2502 31.5ZM46.6669 28H49.0002V37.3333H46.6669V28Z" fill="#CA3E47"/>
                            </svg>                        
                    </div>
                    <div class="violation_header">
                        <h3>БЕСПЛАТНАЯ
                            КОНСУЛЬТАЦИЯ</h3>
                    </div>
                </div>
                <div class="violation">
                    <div class="violation_img-wrapper">	
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50.1668 11.837V34.6034C50.1668 37.3299 48.5358 40.5545 46.3402 42.1459L32.2305 52.36C29.8295 54.0984 26.1732 54.1019 23.7675 52.36L9.66133 42.1447C7.47266 40.5604 5.8335 37.3194 5.8335 34.6022V11.837C5.8335 8.86204 7.944 5.89287 10.7522 5.00271C11.6925 4.64571 13.3177 4.14871 15.5355 3.65987C19.2968 2.83037 23.4852 2.33337 28.0002 2.33337C32.5152 2.33337 36.7035 2.83037 40.4648 3.65987C42.6932 4.15104 44.323 4.65037 45.261 5.00737C48.0493 5.92321 50.1668 8.87954 50.1668 11.837ZM10.5002 11.837V34.6034C10.5002 35.8307 11.4277 37.6624 12.3983 38.3659L26.5057 48.5835C27.2768 49.1412 28.7258 49.14 29.4947 48.5835L43.602 38.3659C44.582 37.6554 45.5002 35.84 45.5002 34.6034V11.837C45.5002 10.8769 44.6543 9.70671 43.7887 9.43604L43.644 9.38587C43.3046 9.26077 42.9614 9.146 42.615 9.04171C41.5748 8.72362 40.522 8.44845 39.4592 8.21687C36.0152 7.45737 32.1617 7.00004 28.0002 7.00004C23.8387 7.00004 19.9852 7.45737 16.5412 8.21687C15.4784 8.44845 14.4255 8.72362 13.3853 9.04171C12.8603 9.20387 12.5127 9.32521 12.3563 9.38587L12.1813 9.44421C11.3355 9.69854 10.5002 10.8617 10.5002 11.8382V11.837ZM20.3165 25.1837L24.5002 29.3674L35.6838 18.1837C36.1239 17.7587 36.7133 17.5235 37.3251 17.5288C37.9369 17.5341 38.5221 17.7795 38.9547 18.2121C39.3874 18.6447 39.6328 19.23 39.6381 19.8418C39.6434 20.4536 39.4082 21.043 38.9832 21.483L26.1498 34.3164C25.7123 34.7538 25.1189 34.9995 24.5002 34.9995C23.8814 34.9995 23.2881 34.7538 22.8505 34.3164L17.0172 28.483C16.5921 28.043 16.3569 27.4536 16.3623 26.8418C16.3676 26.23 16.613 25.6447 17.0456 25.2121C17.4782 24.7795 18.0634 24.5341 18.6752 24.5288C19.287 24.5235 19.8764 24.7587 20.3165 25.1837Z" fill="#CA3E47"/>
                            </svg>                        
                    </div>
                    <div class="violation_header">
                        <h3>ПРОВЕРКА
                            ПЕРЕД ОПЛАТОЙ</h3>
                    </div>
                </div>
                <h3 class="under_violation">С 2014 года поставляем и реализуем оборудование для майнинга. 2 офиса со складом 
                    в Москве и Китае позволяют оперативно поставлять
                     оборудование по всей территории России. В наличии сотни единиц техники от ведущих производителей
                      Bitmain, Whatsminer, Canaan, Innosilicon</h3>
    
                <div class="job_we">
                        <div class="job_we_img">
                            <img src="../img/do.jpg" alt="kartinka o nas" class="job_we_img">
                        </div>
                        <div class="job_we_text_righ">
                            <h1>РАБОТАЕМ С 2014 ГОДА</h1>
                            <p>Успешно продаём оборудование для майнинга с 2014 года. 2 офиса со складами 
                                в Москве и Китае позволяют нам доставлять оборудование 
                                по России так быстро, как это возможно.</p>
                               <a href="#">Обратный звонок</a>
                        </div> 
    
                </div>
        </div>
    
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