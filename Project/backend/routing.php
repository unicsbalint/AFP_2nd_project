<?php
if (!array_key_exists('p', $_GET) || empty($_GET['p']))
    $_GET['p'] = 'home';

switch ($_GET['p']) {
    case 'home': require_once 'backend/home.php'; break;
    case 'browse': require_once 'backend/products/browse.php'; break;
    case 'favorites': require_once 'backend/favorites.php'; break;
    case 'cart': require_once 'backend/cart.php'; break;
}
?>