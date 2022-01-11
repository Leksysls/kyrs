<?php

    $connect = new mysqli('192.168.100.80:3306', 'lex', 'lex', 'kyrs');

    if (!$connect) {
        die('Error connect to DataBase');
    }