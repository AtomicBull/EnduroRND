<?php
//Проверяем пришли ли данные из формы
if (!empty($_POST['renter_name']) && !empty($_POST['renter_phone']) && !empty($_POST['renter_date']) && !empty($_POST['renter_model']) && !empty($_POST['renter_time'])) {

    //htmlspecialchars - Удаляет HTML теги в поле
    //trim - удаляет пробелы в начале и конце строки
    $renter_name =  htmlspecialchars(trim($_POST['renter_name']));
    $renter_phone =  htmlspecialchars(trim($_POST['renter_phone']));
    $renter_date =  htmlspecialchars(trim($_POST['renter_date']));
    $renter_model =  $_POST['renter_model'];
    $renter_time =  $_POST['renter_time'];

    //Подключение к бд
    require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

    //Подготовка запроса отправки данных в  бд
    $sql = $pdo->prepare("INSERT INTO `rentform`(`id`, `name`, `phone`, `model`, `date`, `rent_time`) VALUES ('Null','$renter_name','$renter_phone','$renter_model','$renter_date','$renter_time')");
    $sql->execute(); ?>

<?php
    //Отправка данных в telegram чат
    $bot_token = "5990767872:AAE3TJSx59eOY2Uk14_tVux-xl4D40A_0M8"; //токен бота
    $chat_id = "-924799049"; //id чата
    $Telegram_arr = array(
        'Прокат' => '',
        'Имя клиента: ' => $renter_name,
        'Телефон: ' => $renter_phone,
        'Дата проката: ' => $renter_date,
        'Модель мотоцикла: ' => $renter_model,
        'Время проката: ' => $renter_time
    ); // достаём данные из формы для сообщения

    $Telegram_text = ''; // В данную переменную через цикл записываем данные из массива в строку
    foreach ($Telegram_arr as $key => $value) {
        $Telegram_text .= "<b>" . $key . "</b>" . $value . "%0A";
    };
    //$Telegram_text = urlencode($Telegram_text); //Помогает, но вид сообщения становится не очень.
    //Запрос в телеграм
    $sendToTelegram = fopen("https://api.telegram.org/bot{$bot_token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$Telegram_text}", "r");
} else {
    echo "Данных нет";
}
?>

<?php require "../Public/header.php"; ?>

<section class="certificate_end">
    <div class="container">
        <div class="promo-inner" style="display: flex; align-items: center; justify-content: center;">
            <form style="align-items: center;" class="promo_panel" action="../index.php" method="post">
                <p style="font-size: 30px;" class="promo_panel_item">Благодарим за обращение!</p>
                <p style="font-size: 30px;" class="promo_panel_item">Скоро с вами свяжутся</p>
                <button style="width: 80%; margin-top: 20px; margin-bottom: 20px;" class="promo_button">Вернуться на главную страницу</button>
            </form>
        </div>

    </div>
</section>

<?php require "../Public/footer.php"; ?>