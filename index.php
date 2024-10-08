<?php
session_start();
require_once 'config.php';
spl_autoload_register( function($class){ require_once  ROOT_PATH . '/' . $class . '.php'; });
include_once 'views/header.html';
include_once 'views/menu.php';
require_once 'views/content.php';
include_once 'views/footer.php';
?>

