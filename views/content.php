
<?php
// Vérification que la requête provient de index.php
if (str_contains($_SERVER['SCRIPT_NAME'], 'index.php')) {
    if (!empty($_GET['slug'])) {
        App\Lib\Tool::getContent($_GET['slug']);
    }
} else {
    if (!defined('ROOT_PATH')) {
        $redirect = '../index.php';
    } else {
        $redirect = ROOT_PATH . 'index.php';
    }
    // sinon, redirection vers index.php
    header('Location: ' . $redirect);
    exit;
}



