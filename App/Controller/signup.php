<?php
namespace App\Controller;
session_start();

require_once __DIR__ . '/../../config.php';
spl_autoload_register(function($class){ require_once  ROOT_PATH . '/' . $class . '.php'; });

use App\Controller\UserController;
use views\AlertController;

if (empty($_POST)) {
    header("HTTP/1.1 405");
    die;
}

$user = new UserController();
if($user->create($_POST['nom'], $_POST['prenom'], $_POST['matricule'], $_POST['date_de_naissance'])){
    AlertController::alert('Votre compte a été creer avec success', 'success');   
    $_SESSION['user'] = $user->getId();
    header('Location: ../../index.php?slug=views/profil.php');
}
