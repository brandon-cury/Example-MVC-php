<?php
namespace App\Model;

require_once __DIR__ . '/../../config.php';
spl_autoload_register(function($class){ require_once  ROOT_PATH . '/' . $class . '.php'; });

use App\Controller\UserController;
use App\Model\Model;

class User extends Model{
    public static function create(UserController $user): bool|int{
        $db = self::db();
        $req = $db->prepare("INSERT INTO etudiants (nom, prenom, date_de_naissance, matricule) VALUES (?, ?, ?,?)");
        $params = [$user->getNom(), $user->getPrenom(), $user->getDate(), $user->getMatricule()];
        $req->execute($params);
            if($req->rowCount() > 0){
                return $db->lastInsertId();
            }
            return false;
    }
    public static function id(int $id): bool|UserController{
        $db = self::db();
        $req = $db->prepare("SELECT * FROM etudiants WHERE id=?");
        $req->execute([$id]);
        $req->setFetchMode(\PDO::FETCH_CLASS, UserController::class);
        return $req->fetch();
    }


}