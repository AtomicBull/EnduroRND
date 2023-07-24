<?php
// require $_SERVER['DOCUMENT_ROOT'] . "./functions/connect.php";
// При подключении через require выдаёт ошибку доступа: Failed to open stream: Permission denied in... 
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);


$model = htmlspecialchars(trim($_POST["model"]));
$engine = htmlspecialchars(trim($_POST["engine"]));
$engine_power = htmlspecialchars(trim($_POST["engine_power"]));
$engine_capacity = htmlspecialchars(trim($_POST["engine_capacity"]));
$suspension = htmlspecialchars(trim($_POST["suspension"]));
$price = htmlspecialchars(trim($_POST["price"]));
$img = htmlspecialchars(trim($_POST["img"]));

$sql = $pdo->prepare("INSERT INTO `motopark`(`id`, `model`, `engine`, `engine_power`, `engine_capacity`, `suspension`, `price`, `img`) 
VALUES ('Null','$model','$engine','$engine_power','$engine_capacity','$suspension','$price','$img')");
$sql->execute();

header('location:/Admin/Add_product.php');
