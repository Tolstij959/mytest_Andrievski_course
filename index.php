<?php
// Запросы к БД Mysql при помощи PHP(PDO)
require_once 'config.php';
//$connection = new PDO ("mysql:host=localhost;dbname=mytest;charset=utf8  ",username:"root", password:"mysql");
//Сделал ниже так, потому что вариант через new PDO не работал(в сервере php 7.4 а в PHPStorm- 8.1, может поэтому)
$dsn = 'mysql:host='.$host.';dbname='.$data;
$pdo = new PDO($dsn, $user, $pass);
$query = "INSERT INTO first ( `Фамилия`, `Имя`, `Отчество`, `Пол`, `Дата рождения`, `Статус контрагента`) VALUES ('Иванов','Сергей','Антонович','Мужской','2000-03-04','Покупатель')";
$pdo->exec($query);



