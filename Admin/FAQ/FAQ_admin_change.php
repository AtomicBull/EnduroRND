<?php
// require $_SERVER['DOCUMENT_ROOT'] . "./functions/connect.php";
// При подключении через require выдаёт ошибку доступа: Failed to open stream: Permission denied in... 
$user = "root";
$password = "";
$host = "localhost";
$db = "endurornd";
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);


$question = $_POST["question"];
$answer = $_POST["answer"];
$id = $_POST["id"];

$row = "UPDATE faq SET question=:question,answer=:answer WHERE id = '$id'";
$query = $pdo->prepare($row);
$query->execute([
    "question" => $question,
    "answer" => $answer
]);
header('location:/Admin/FAQ_admin.php');
