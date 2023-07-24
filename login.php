<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Вход в админку</title>
</head>

<body>
    <h1 style="text-align: center; padding-top: 100px; color:red">Вход в административную панель</h1>
    <form action="Admin/admin.php" method="post" style="text-align: center; padding-top: 80px">
        <div class="form-group">
            <input type="text" placeholder="Введите логин" name="login" </input>
        </div>
        <br>
        <div class="form-group">
            <input type="text" placeholder="Введите пароль" name="password" </input>
        </div>
        <br>
        <button type="submit" class="btn btn-warning">Войти</button>
    </form>

</body>

</html>