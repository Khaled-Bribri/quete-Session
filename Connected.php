<?php
 if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


?>