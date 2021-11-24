<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'kyrs');

    if (!$connect) {
        die('Error connect to DataBase');
    }