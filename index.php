<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_COOKIE['userlog']) == ''):
        ?>
        <!-- Поля для ввода данных -->
        <div class="row">
            <div class="col">
                <h1>Регистрация</h1>
                <form action="form.php" method="POST">
                    <input type="text" class="form-control" name="mail" id="mail" placeholder="Введите mail"><br>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                <!-- Кнопка отправить -->
                    <button class="btn btn-outline-success" type="submit">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col">
                <h1>Авторизация</h1>
                <form action="auth.php" method="POST">
                    <input type="text" class="form-control" name="mail" id="mail" placeholder="Введите mail"><br>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
                <!-- Кнопка отправить -->
                    <button class="btn btn-outline-success" type="submit">Авторизоваться</button>
                </form>
            </div>
        </div>
        <?php else: ?>
            <p>Привет <?=$_COOKIE['userlog']?>. Чтобы выйти, нажмите <a href="exit.php">здесь.</a></p>
        <?php endif;?>
            
    </div>
</body>
</html>