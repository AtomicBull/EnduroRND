<?php session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/functions/connect.php";
?>

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
    <div style="text-align: center">

        <?php if (!empty($_SESSION['login'])) : ?>
            <br>
            <a class="btn btn-danger" href="/logout.php">Выйти</a>
            <a class="btn btn-secondary" href="/closed_admin.php">Назад</a>
            <div class="container">
                <h1>Обращения Прокат</h1>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Имя клиента</th>
                            <th>Телефон клиента</th>
                            <th>Модель мотоцикла</th>
                            <th>Дата проката</th>
                            <th>Время проката</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>




                        <?php
                        $sql = $pdo->query("SELECT * FROM rentform");
                        while ($res = $sql->fetch(PDO::FETCH_ASSOC)) {
                            // Проверяем статус из БД
                            if ($res['status'] == 1) {
                                $checked = "checked";
                            } else {
                                $checked = "1";
                            }

                            echo "
                                <form action='/Admin/RentForm/RentForm_change.php' method='post'>
                            <tr>
                                <td>{$res['name']}</td>
                                <td>{$res['phone']}</td>
                                <td>{$res['model']}</td>
                                <td>{$res['date']}</td>
                                <td>{$res['rent_time']}</td>
                                <td><input type='checkbox' name='status' {$checked}></td>
                                <td><button type='submit' name='id' value='{$res['id']}' class='btn btn-warning'>Сохранить</button></td>
                                </form>  
                            </tr> 
                               
                        ";
                        }
                        ?>






                    </tbody>
                </table>




            </div>

        <?php else :
            echo '<h2>Вы что хакер?</h2>';
            echo '<a href="/">На главную</a>';
        ?>
        <?php endif ?>
    </div>

</body>

</html>


<!-- <td><input type='checkbox' name='status' <?= $res['status'] == 1 ? 'checked' : '' ?>></td> -->