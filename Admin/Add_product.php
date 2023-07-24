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
        <?php if (!empty($_SESSION['login'])) : ?>
            <br>
            <a class="btn btn-danger" href="/logout.php">Выйти</a>
            <a class="btn btn-secondary" href="/closed_admin.php">Назад</a>
            <br>
            <h1>Добавить товар</h1>

            <form class="form-row" action="/Admin/Add_product/Add_product_change.php" method="post" enctype="multipart/form-data">
                <!--            enctype="multipart/form-data" - атрибут формы HTML, который указывает на то, что форма содержит файлы для отправки на сервер.-->

                <div class="form-row">
                    <div class="col">
                        <label style="font-size: 20px" for="model">Модель</label>
                        <input required placeholder="Введите модель мотоцикла" style="height: 50px;" class="form-control" type="text" name="model">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="engine">Двигатель</label>
                        <input required placeholder="Введите тип двигателя" style="height: 50px;" class="form-control" type="text" name="engine">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="engine_power">Мощность</label>
                        <input required placeholder="Введите мощность двигателя" style="height: 50px;" class="form-control" type="text" name="engine_power">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="engine_capacity">Объём</label>
                        <input required placeholder="Введите объём двигателя" style="height: 50px;" class="form-control" type="text" name="engine_capacity">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="suspension">Подвеска</label>
                        <input placeholder="Введите тип подвески" style="height: 50px;" class="form-control" type="text" name="suspension">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="price">Стоимость</label>
                        <input required placeholder="Введите стоимость" style="height: 50px;" class="form-control" type="text" name="price">
                    </div>

                    <div class="col">
                        <label style="font-size: 20px" for="img">Ссылка на фото</label>
                        <input required placeholder="Введите ссылку на фото" style="height: 50px;" class="form-control" type="text" name="img">
                    </div>
                </div>
                <br><br>

                <button type="submit" name="save" class="btn btn-warning">Сохранить товар</button>
            </form>


        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a class="btn btn-danger" href="/">На главную</a>';
        ?>

        <?php endif ?>
    </div>
</body>

</html>