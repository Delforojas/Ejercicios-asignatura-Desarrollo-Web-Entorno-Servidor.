<?php
if (!isset($_COOKIE['contador'])) {
    setcookie('contador',1, time() + (86400 * 30));
} else {
    if ($_COOKIE['contador'] >= 10){
        setcookie('contador', 1, time() + (86400 * 30));
    } else {
        setcookie('contador', $_COOKIE['contador'] + 1, time() + (86400 * 30));
    }
}

echo "El valor del contador de visitas es de " . $_COOKIE['contador'];
