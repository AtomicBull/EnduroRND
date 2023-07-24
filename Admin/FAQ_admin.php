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
            <h1>Редактирование вопрос-ответ</h1>
            <br>
            <a class="btn btn-danger" href="/logout.php">Выйти</a>
            <a class="btn btn-secondary" href="/closed_admin.php">Назад</a>

            <?php
            //Подготовка запроса
            $sql = $pdo->prepare("SELECT * FROM faq");
            $sql->execute();
            //Метод fetchAll() возвращает все строки результата запроса в виде многомерного массива.
            $results = $sql->fetchAll(PDO::FETCH_OBJ);
            ?>



            <!-- Выводи данные о вопросах из Бд перебором и записываем их в label -->
            <?php foreach ($results as $result) : ?>
                <form action="/Admin/FAQ/FAQ_admin_change.php" method="post" enctype="multipart/form-data">
                    <!--            enctype="multipart/form-data" - атрибут формы HTML, который указывает на то, что форма содержит файлы для отправки на сервер.-->
                    <div class="form-row">
                        <div class="col">
                            <label style="font-size: 20px" for="question">Редактировать вопрос</label>
                            <input style="height: 50px;" class="form-control" type="text" name=" question" value="<?php echo $result->question ?>">
                        </div>
                        <div class=" col">
                            <label style="font-size: 20px" for="answer">Редактировать ответ</label>
                            <input style="height: 50px;" class="form-control" type="text" name="answer" value="<?php echo $result->answer ?>">
                            <input style="Display: none;" class="form-control" type="text" name="id" value="<?php echo $result->id ?>">
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="save" class="btn btn-warning">Сохранить изменения</button>
                </form>
            <?php endforeach; ?>





        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a class="btn btn-danger" href="/">На главную</a>';
        ?>

        <?php endif ?>

    </div>
</body>

</html>