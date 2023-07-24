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
$id = htmlspecialchars(trim($_POST["id"]));

// Проверка на обновление/удаление товара
if (isset($_POST['save'])) {
    $row = "UPDATE motopark SET model=:model,engine=:engine,engine_power=:engine_power,engine_capacity=:engine_capacity,suspension=:suspension,price=:price,img=:img WHERE id = '$id'";
    $query = $pdo->prepare($row);
    $query->execute([
        "model" => $model,
        "engine" => $engine,
        "engine_power" => $engine_power,
        "engine_capacity" => $engine_capacity,
        "suspension" => $suspension,
        "price" => $price,
        "img" => $img
    ]);
} elseif (isset($_POST['delete'])) {
    $sql = $pdo->prepare("DELETE FROM motopark WHERE id = '$id'");
    $sql->execute();
}
header('location:/Admin/Moropark_admin.php');
