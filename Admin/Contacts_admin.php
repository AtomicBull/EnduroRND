<?php session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Админка</title>
</head>

<body>
    <div class="container" style="text-align: center">
        <div style="text-align: center">
            <?php if (!empty($_SESSION['login'])) : ?>
                <h1>Редактирование контактов</h1>
                <br>
                <a class="btn btn-danger" href="/logout.php">Выйти</a>
                <a class="btn btn-secondary" href="/closed_admin.php">Назад</a>
                <?php
                $sql = $pdo->prepare("SELECT * FROM contacts");
                $sql->execute();
                $res = $sql->fetch(PDO::FETCH_OBJ);
                ?>
                <form class="form-row" action="/Admin/contacts/Contacts_admin_change.php" method="post" enctype="multipart/form-data">
                    <!--            enctype="multipart/form-data" - атрибут формы HTML, который указывает на то, что форма содержит файлы для отправки на сервер.-->

                    <div class="form-row">
                        <div class="col">
                            <label style="font-size: 20px" for="whatsapp">Редактировать ссылку на whatsapp</label>
                            <input style="height: 50px;" class="form-control" type="text" name="whatsapp" value="<?php echo $res->whatsapp ?>">
                        </div>
                        <div class=" col">
                            <label style="font-size: 20px" for="vk">Редактировать ссылку на vk?</label>
                            <input style="height: 50px;" class="form-control" type="text" name="vk" value="<?php echo $res->vk ?>">
                        </div>

                        <div class=" col">
                            <label style="font-size: 20px" for="telegram">Редактировать ссылку на telegram</label>
                            <input style="height: 50px;" class="form-control" type="text" name="telegram" value="<?php echo $res->telegram ?>">
                        </div>

                        <div class="col">
                            <label style="font-size: 20px" for="instagram">Редактировать ссылку на instagram</label>
                            <input style="height: 50px;" class="form-control" type="text" name="instagram" value="<?php echo $res->instagram ?>">
                        </div>

                        <div class="col">
                            <label style="font-size: 20px" for="phone">Редактировать телефон</label>
                            <input style="height: 50px;" class="form-control" type="text" name="phone" value="<?php echo $res->phone ?>">
                        </div>

                        <div class="col">
                            <label style="font-size: 20px" for="address">Редактировать адрес</label>
                            <input style="height: 50px;" class="form-control" type="text" name="address" value="<?php echo $res->address ?>">
                        </div>
                    </div>
                    <br><br>

                    <button type="submit" name="save" class="btn btn-warning">Сохранить</button>
                </form>



            <?php else :
                echo '<h2>Вы что хакер?</h2>';
                echo '<a href="/">На главную</a>';
            ?>

            <?php endif ?>
        </div>

    </div>



</body>

</html>