<?php

require __DIR__.'/functions.php';
$login=getCurrentUser();
$timeLeft='';
$actionText='';
$birthDayText='';
$days='';
if ($login){
 $actionText='До конца персональной скидки осталось  ' ;
 $birthDayText='Ваш день рождения через';
 $timeLeft = (newAktion()==86400) ? '24:00:00' : gmdate('H:i:s ',newAktion());
 if (datesToBirthday()==0){
    $birthDayText="С Днем Рождения!"."<br>"."Только сегодня скидка"."<br>"." в 5%"."<br>"." на все услуги салона!";
    $datsNumber=' ';
    $days='';
    }
    else $days=datesToBirthday().' д.';
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Спа салон</title>
</head>
<body>
  <header class="header">
        <a class="menu">О нас</a>
        <a class="menu">Услуги</a>
        <a class="menu">Контакты</a>
        <?php if ($login===null):?>
         <a class="button" href="login.php">Авторизуйтесь</a>
            <?php else: ?>
                <a class="hi"><i>Добро пожаловать,</i><b><?=$login ?></b>!</a>
                <br>
                <a class="menu" href="logout.php">Выйти</a>
                <?php endif; ?>
                
        
  </header>  
  <main>
    <div class="main" class="section">
        <h1>Спа салон</h1>
        <section class="service">
            <ul>
                <li><a>Общий оздоровительный массаж</a></li>
                <li><a>Спортивный массаж</a></li>
                <li><a>Лимфодренажный массаж</a></li>
                <li><a>Антицеллюлитный массаж</a></li>
                <li><a>Парафинотерапия</a></li>
                <li><a>Грязевая ванна</a></li>
                
            </ul>   
            <div class="birthday">
                    <a><?=$birthDayText?></a></br>
                    <div><?= $days?></div>
            </div>
        </section>
        <div class="container ">
            <section class="action">
            <a class="h1">Акции</a></br>
            <a>Акции <span> Акции</span>Акции</a></br>
            <a> Акции <span> Акции</span> Акции </a>
            </section>

            <section class="action spec">
                <div class="spec">
                    <a class="h2"><?= $actionText ?><span><?= $timeLeft ?></span></a></br>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="galereya">
                <h3>Встречайте нашу новинку</h3>
                <img src="img\pic2.jpg"  ">
            </section>
            <section class="galereya">
                <h3>Подарите себе отдых</h3>
                <img src="img\pic3.jpg"  ">
            </section>
            <section class="galereya">
                <h3>Нежные ароматы  масел</h3>
                <img src="img\pic5.jpg"  ">
            </section>
        </div>
    </div>
  </main>
  <footer class="footer">

  </footer>
</body>
</html>












































