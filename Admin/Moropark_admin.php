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
            <h1>Редактировать товары</h1>

            <?php
            $sql = $pdo->query("SELECT * FROM motopark");
            while ($res = $sql->fetch(PDO::FETCH_ASSOC)) {
                echo '
    <form class="form-row" action="/Admin/Motopark/Motopark_admin_change.php" method="post" enctype="multipart/form-data">  
    <div class="form-row">
        <div class="col">
            <img src="' . $res["img"] . '" alt="moto_img">
            <br><br>
            <label style="font-size: 20px" for="img">Ссылка на фото</label>
            <input style="height: 50px;" class="form-control" type="text" name="img" value="' . $res["img"] . '">
            </div>
<br>
            <div class="col">
    <label style="font-size: 20px" for="model">Модель</label>
    <input style="height: 50px;" class="form-control" type="text" name="model" value="' . $res["model"] . '">
            </div>
<br>
            <div class="col">
            <label style="font-size: 20px" for="engine">Двигатель</label>
            <input style="height: 50px;" class="form-control" type="text" name="engine" value="' . $res["engine"] . '">
            </div>
<br>
            <div class="col">
             <label style="font-size: 20px" for="engine_power">Мощность</label>
            <input style="height: 50px;" class="form-control" type="text" name="engine_power" value="' . $res["engine_power"] . '">
            </div>
<br>
             <div class="col">
             <label style="font-size: 20px" for="engine_capacity">Объём</label>
            <input style="height: 50px;" class="form-control" type="text" name="engine_capacity" value="' . $res["engine_capacity"] . '">
            </div>
<br>
            <div class="col">
             <label style="font-size: 20px" for="suspension">Подвеска</label>
            <input style="height: 50px;" class="form-control" type="text" name="suspension" value="' . $res["suspension"] . '">
            </div>
<br>
              <div class="col">
             <label style="font-size: 20px" for="price">Стоимость</label>
            <input style="height: 50px;" class="form-control" type="text" name="price" value="' . $res["price"] . '">
            </div>
<br>
             <div class="col">
            <input style="Display: none;" class="form-control" type="text" name="id" value="' . $res["id"] . '">
            </div>
            <br>
            <button type="submit" name="save" class="btn btn-warning">Сохранить изменения</button>
            <button type="submit" name="delete" class="btn btn-danger">Удалить товар</button>
            </div>  
</form>
<br><br>
                   
                ';
            } ?>



        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a class="btn btn-danger" href="/">На главную</a>';
        ?>

        <?php endif ?>
    </div>
</body>

</html>