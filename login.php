<?php


if (!empty($_POST)){
    require __DIR__ . '/functions.php';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if (checkPassword($email,$password)) {
        header('Location: /index.php');
        exit;//header('Location: /login_process');
    } else {
        header('Location: /registration.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Форма авторизации</title>
    </head>
    <body>
       
    <div class="container">
        <form class="left" action="#" method="post">
            <div class="header">
                <h2 class="animation a1">Добро пожаловать!</h2>
                <h4 class="animation a2">Введите ваш логин и пароль</h4>
            </div>
            <form class="form left" action="#" method="post">
                <input type="email" name="email" id="email" class="form-field animation a3" placeholder="Почта">
                <input type="password" name="password" id="password"class="form-field animation a4" placeholder="Пароль">
                <p class="animation a5"><a href="registration.php">Не зарегистрированны?</a></p>
                <button class="animation a6" type="submit">Войти</button>
            </form>
        </div>
        <div class="right">
        </div>
    </div>
    </body>
</html>  


<?php if (isset($error)): ?>
        <span style = "color: red;">
        <?= $error ?>
    </span>
    <?php endif; ?>