<?php
// require $_SERVER['DOCUMENT_ROOT'] . "./functions/connect.php";
// При подключении через require выдаёт ошибку доступа: Failed to open stream: Permission denied in... 
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);



$status = 0;
$id = $_POST["id"];

// Проверяем если кнопка нажата то присваиваем 1 если нет то оставляем 0
if (isset($_POST['status'])) {
    $status = 1;
}



//Обновляем статус обращения по id
$row = "UPDATE rentform SET status=:status WHERE id = '$id'";
$query = $pdo->prepare($row);
$query->execute([
    "status" => $status
]);



header('location:/Admin/RentForm_show.php');
