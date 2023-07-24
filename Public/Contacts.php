<?php
//Подкючение к бд
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

//Подготовка запроса
$sql = $pdo->prepare("SELECT * FROM contacts");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);
?>

<section class="Contacts" id="Contacts">
    <div class="container">
        <div class="titles">
            <h2>Контакты</h2>
        </div>
        <div class="Contacts-inner">
            <div class="Contacts_panel">
                <div class="Contacts_text">
                    <p><?= $res["address"] ?></p>
                    <p>Тел: <?= $res["phone"] ?></p>
                    <p id="Contacts_text_smaller_p">Ежедневно с 10:00-18:00</p>
                    <h4>Мы в соц-сетях:</h4>
                    <div class="Contacts_socials">
                        <a target="_blank" href="<?= $res["whatsapp"] ?>" class="Contacts_socials_item"><i class="fa-brands fa-whatsapp"></i></a>
                        <a target="_blank" href="<?= $res["vk"] ?>" class="Contacts_socials_item"><i class="fa-brands fa-vk"></i></a>
                        <a target="_blank" href="<?= $res["telegram"] ?>" class="Contacts_socials_item"><i class="fa-brands fa-telegram"></i></a>
                        <a target="_blank" href="<?= $res["instagram"] ?>" class="Contacts_socials_item"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2bb259c1dc04baf0eac05a4ed61da3af31ada6923b519de1582458b17984b3eb&amp;source=constructor"></iframe>
            </div>
        </div>
    </div>
</section>