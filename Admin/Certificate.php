<?php session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Админка</title>
</head>
<body>
<div style="text-align: center">
    <h1>Редактирование контактов</h1>
    <?php if (!empty($_SESSION['login'])) : ?>
        <br>
        <a href="/logout.php">Выйти</a>
        <a href="/closed_admin.php">Назад</a>
        <?php
        $sql = $pdo->prepare("SELECT * FROM contacts");
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
        ?>
        <form action="/Admin/contacts/contacts_change.php" method="post" enctype="multipart/form-data">
<!--            enctype="multipart/form-data" - атрибут формы HTML, который указывает на то, что форма содержит файлы для отправки на сервер.-->
            <label for="whatsapp">Редактировать ссылку на whatsapp?</label>
            <input type="text" name="whatsapp" value="<?php echo $res->whatsapp ?>">
            <br>
            <label for="vk">Редактировать ссылку на vk?</label>
            <input type="text" name="vk" value="<?php echo $res->vk ?>">
            <br>
            <label for="telegram">Редактировать ссылку на telegram?</label>
            <input type="text" name="telegram" value="<?php echo $res->telegram ?>">
            <br>
            <label for="instagram">Редактировать ссылку на instagram?</label>
            <input type="text" name="instagram" value="<?php echo $res->instagram ?>">
            <br>
            <label for="phone">Редактировать телефон?</label>
            <input type="text" name="phone" value="<?php echo $res->phone ?>">
            <br>
            <label for="address">Редактировать адрес?</label>
            <input type="text" name="address" value="<?php echo $res->address ?>">
            <br>

            <label for="file">Изменить фото сертификата?</label>
            <input type="file" name="address" value="<?php echo $res->address ?>">
            <br>

            <button type="submit">Сохранить</button>
        </form>

    <?php else:
        echo '<h2>Вы что хакер?</h2>';
        echo '<a href="/">На главную</a>';
        ?>

    <?php endif ?>
</div>

</body>
</html>



