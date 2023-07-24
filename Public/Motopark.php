<?php
// Подключение к бд
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

//Подготовка запроса
$sql = $pdo->prepare("SELECT * FROM motopark");
$sql->execute();
?>



<section class="motopark" id="motopark">
    <div class="container">
        <div class="titles">
            <h2>Наш Мотопарк</h2>
        </div>
        <div class="motopark-inner">

            <!-- Вытаскиваем из БД все данные о товарах и выводим карточки с данными на страницу -->
            <?php
            $sql = $pdo->query("SELECT * FROM motopark");
            while ($res = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '
                 <div class="motopark_card">
                    <img class="motopark_card_img" src="' . $res["img"] . '" alt="moto_img">
                    <div class="motopark_card_title">
                        <p>' . $res["model"] . '</p>
                    </div>
                    <div class="motopark_card_description">
                        <p>Технические характеристики:</p>
                        <p>Двигатель: ' . $res["engine"] . ' fmm</p>
                        <p>Мощность: ' . $res["engine_power"] . ' л/с</p>
                        <p>Объём: ' . $res["engine_capacity"] . ' см³</p>
                        <p>Подвеска: ' . $res["suspension"] . '</p>
                        <p>Стоимость: ' . $res["price"] . ' ₽ / час
                        </p>
                    </div>
                    <button onclick="scrollToRentForm()" type="submit" class="motopark_card_button">Забронировать</button>
                </div>
                
                ';
            } ?>

        </div>
    </div>
    </div>
</section>