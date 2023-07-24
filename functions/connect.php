<?php
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

//// Проверяем подключение к БД
// if (mySqli_connect_error()) {
//     echo "Подключение к БД невозможно<br>" . mysqli_connect_error();
// } else {
//     echo "Подключение к БД выполнено успешно";
// }
