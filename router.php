<?php
$page = 'home';

if (isset($_GET['page'])) $page = $_GET['page'];

switch ($page) {
    case 'dashboard':
        include 'views/dashboard.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
    case 'home':
    default:
        include 'views/home.php';
        break;
}
?>