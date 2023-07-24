<?php
//Подкючение к бд
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

//Подготавливаем запрос и достаём все данные о контактах из БД
$sql = $pdo->prepare("SELECT * FROM contacts");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);

$current_page = $_SERVER['PHP_SELF']; // получаем путь текущей страницы
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <!-- Fontawesome для иконок соц сетей -->
    <script src="https://kit.fontawesome.com/85f1268497.js" crossorigin="anonymous"></script>
    <!-- Вставляем Swiper -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> -->
    <script src="./js/script.js"></script>
    <!-- Подключаем стили -->
    <link rel="stylesheet" href="../Css/Style.css">
    <!-- Подключаем адаптив -->
    <link rel="stylesheet" href="../Css/Adaptive.css">
    <title>EnduroRND</title>

</head>

<body>
    <!-- навигация -->
    <header class="header">
        <div class="nav-top">
            <div class="container">
                <div class="nav-inner">
                    <div class="logo">
                        <?php
                        if ($current_page === '/functions/rent_form.php' || $current_page === '/functions/certificate_form.php') {
                            echo '<a href="../index.php"><img src="../Img/Svg/Logo.svg" alt="EnduroRND"></a>';
                        } else {
                            echo '<a href="./index.php"><img src="./Img/Svg/Logo.svg" alt="EnduroRND"></a>';
                        }
                        ?>
                    </div>
                    <nav class="menu">
                        <ul class="menu-item">
                            <?php
                            if ($current_page === '/functions/rent_form.php' || $current_page === '/functions/certificate_form.php') {
                                // выводим ссылку на index.php
                                echo '<li><a class="menu-item_1" href="../index.php#motopark">Наш Мотопарк</a></li>';
                                echo '<li><a class="menu-item_1" href="../index.php#Certificate">Сертификат</a></li>';
                                echo '<li><a class="menu-item_1" href="../index.php#Contacts">Контакты</a></li>';
                            } else {
                                // выводим ссылку, которая приведет к нужной секции на index.php
                                echo '<li><a class="menu-item_1" href="#motopark">Наш Мотопарк</a></li>';
                                echo '<li><a class="menu-item_1" href="#Certificate">Сертификат</a></li>';
                                echo '<li><a class="menu-item_1" href="#Contacts">Контакты</a></li>';
                            }
                            ?>
                        </ul>
                        <ul class="socials">
                            <li><a target="_blank" href="<?= $res["whatsapp"] ?>" class="social_item"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a target="_blank" href="<?= $res["vk"] ?>" class="social_item"><i class="fa-brands fa-vk"></i></a></li>
                            <li><a target="_blank" href="<?= $res["telegram"] ?>" class="social_item"><i class="fa-brands fa-telegram"></i></a></li>
                            <li><a target="_blank" href="<?= $res["instagram"] ?>" class="social_item"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="phone_number">
                            <a class="phone_number" href="tel:<?= $res["phone"] ?>">Тел: <?= $res["phone"] ?></a>
                        </div>
                    </nav>
                    <div class="burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>