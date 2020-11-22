<?php
    $dbloc = '188.68.221.156';
    $dbuser = $dbname = 'user1';
    $dbpass = 'Qwerty123';
    $dsn = $dsn = "mysql:host={$dbloc};dbname={$dbname}";
    return new PDO($dsn, $dbuser, $dbpass);