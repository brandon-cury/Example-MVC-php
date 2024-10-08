<?php
namespace App\Model;

require_once __DIR__ . '/../../config.php';
spl_autoload_register(function($class){ require_once  ROOT_PATH . '/' . $class . '.php'; var_dump(ROOT_PATH . '/' . $class . '.php'); });

use PDO;

class Model{

    public static function db(string $host = DB_HOST, string $dbname = DB_NAME, string $user = DB_USER, string $pass = DB_PASSWORD): PDO{
    try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . $dbname;
    $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        echo "Failed: " . $e->getMessage();
    }
    return $pdo;
}
 /**
     * Récupère la classe appelante
     * (classe enfant de Model, correspondant au nom de la table en DB)
     *
     * @return string
     */
    protected static function getClassName(): string
    {
        $class = get_called_class();
        $data = explode('\\', $class);
        return strtolower(end($data));
    }


protected static function getColumns()
    {
        $columns = [];
        $cols = self::db()->query("DESCRIBE " . self::getClassName(), PDO::FETCH_OBJ);
        foreach ($cols as $col) {
            $columns[] = $col->Field;
        }
        return $columns;
    }

}