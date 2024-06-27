<?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
    if ($_SESSION['contador'] == 10) {
        session_destroy();
    }
}
echo "El valor del contador de visitas es de " . $_SESSION['contador'];
