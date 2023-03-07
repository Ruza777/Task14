
<?php

?>

<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style_reg.css">
            <title>Регистрация</title>
        </head>
        <body>
            
            <div class="container">
            
                <div class="left">
                    <div class="brand-logo"></div>
                    <div class="header">
                        <h2 class="animation a1">Регистрация нового пользователя</h2>
                    </div>
                    <form class="form left" action="registr_process.php" method="post">
                        <input type="text" name="login" id="login" class="form-field animation a3" placeholder="Логин" required>
                        <input type="date" name="bthday" id="bthday" class="form-field animation a3" required >
                        <label for="date" class="animation a3">Дата рождения</label>
                        <input type="email" name="email" id="email" class="form-field animation a3" placeholder="Электронная почта" required>
                        <input type="password" name="password" id="password" class="form-field animation a4" placeholder="Пароль" required>
                        <button class="animation a6"  type="submit">Регистрация</button>
                    </form>
                </div>
                <div class="right">
                </div>
            </div>

        </body>
    </html>





