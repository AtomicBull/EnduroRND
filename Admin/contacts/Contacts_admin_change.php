<?php
// require $_SERVER['DOCUMENT_ROOT'] . "./functions/connect.php";
// При подключении через require выдаёт ошибку доступа: Failed to open stream: Permission denied in... 
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);


$whatsapp = $_POST["whatsapp"];
$vk = $_POST["vk"];
$telegram = $_POST["telegram"];
$instagram = $_POST["instagram"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$row = "UPDATE contacts SET whatsapp=:whatsapp,vk=:vk,telegram=:telegram,instagram=:instagram,phone=:phone,address=:address";
$query = $pdo->prepare($row);
$query->execute([
    "whatsapp" => $whatsapp,
    "vk" => $vk,
    "telegram" => $telegram,
    "instagram" => $instagram,
    "phone" => $phone,
    "address" => $address
]);
header('location:/Admin/Contacts_admin.php');
