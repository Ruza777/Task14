<?php

unset($_COOKIE['login']);
setcookie('login', null, -1, '/');
unset($_COOKIE['password']);
setcookie('password', null, -1 ,'/');
unset($_COOKIE['mail']);
setcookie('mail', null, -1 ,'/');
unset($_COOKIE['timePromotion']);
setcookie('timePromotion', null, -1 ,'/');
unset($_COOKIE['bthday']);
setcookie('bthday', null, -1 ,'/');
header ('Location: /index.php');