<?php
//require_once '../functions/connect.php';
// Подключение к БД
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
//$pdo = new PDO($dbh,$user,$password);
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

//Подготовка запроса
$sql = $pdo->prepare("SELECT id,login FROM user WHERE login=:login AND password=:password ");
//Выполнение запроса
$sql->execute(array('login' => $login, 'password' => $password));
$array = $sql->fetch(PDO::FETCH_ASSOC);

if ($array["id"] > 0) {
    $_SESSION['login'] = $array["login"];
    header('location:/closed_admin.php');
} else {
    header('location:/login.php');
}
