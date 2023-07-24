<?php
//Подкючение к бд
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

//Подготовка запроса
$sql = $pdo->prepare("SELECT * FROM promo");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_OBJ);
?>


<!-- промо блок начало -->
<section class="promo">
    <div class="container">
        <div class="promo-inner">
            <div class="promo_titles">
                <h1><?php echo $res->title ?></h1>
                <h2><?php echo $res->subtitle ?></h2>
            </div>
            <div class="promo_panel">
                <div class="promo_panel_item">
                    <i class="promo_panel_icon" id="promo_icon1"></i>
                    <p>Выезд в пригород и область!</p>
                </div>

                <div class="promo_panel_item">
                    <i class="promo_panel_icon" id="promo_icon2"></i>
                    <p>Защитная экипировка выдаётся бесплатно!</p>
                </div>

                <div class="promo_panel_item">
                    <i class="promo_panel_icon" id="promo_icon3"></i>
                    <p>Обучение для новичков!</p>
                </div>

                <div class="promo_panel_item">
                    <i class="promo_panel_icon" id="promo_icon4"></i>
                    <p>Аренда от 1.5 часов!</p>
                </div>

                <div class="promo_panel_item">
                    <i class="promo_panel_icon" id="promo_icon5"></i>
                    <p>Интересный трек!</p>
                </div>
            </div>
            <!-- <div class="promo_button"><a href="#RentForm">Записаться на прокат</a></div> -->
            <button onclick="scrollToRentForm()" class="promo_button" href="#RentForm">Записаться на прокат</button>
        </div>
    </div>
</section>
</header>
<!-- промо блок конец -->