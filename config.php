<?php

$db_name = 'meu_banco_de_dados';
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'C@pital1985790';


$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);

