<?php


if ($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}


echo "<a href='ver_cookies.php'>Atras</a>";
