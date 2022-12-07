<?php
//Guarda as informações do banco de dados
$mysqlhostname = "192.168.15.10";
$mysqlport = "3306";
$mysqlusername = "user";
$mysqlpassword = "user";
$mysqldatabase = "oliveiratrade";

//Mostra a string de conexão do mySQL
$dsn = 'mysql:host=' . $mysqlhostname . ';dbname=' . $mysqldatabase . ';port=' . $mysqlport;

//Configura o banco de dados
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);








 