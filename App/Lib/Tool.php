<?php
namespace App\Lib;
class Tool{
/**
 *  Fichier contenant les fonctions utilisées par notre application
 */


/**
 * @param string $data
 * @return string
 */
public static function cleanData(string $data) :string {
    return strip_tags(trim($data));
}
public static function nana() {
    var_dump('fffff');
    die;
}
/**
 * @param array $data
 * @return array
 */
public static function validDataType(array $data) :array {
    foreach ($data as $key => $value) {
        $data[$key] = self::cleanData($value);
        /*
        if ($key == 'email') {
            $data['email'] = filter_var($value, FILTER_VALIDATE_EMAIL);
//        } elseif($key == 'password') {
//            if (strlen($value) < 8
//                || !preg_match("/[\d]/", $value)
//                || !preg_match("/[a-z]/", $value)
//                || !preg_match("/[A-Z]/", $value)
//                || !preg_match("/[0-9]/", $value)
//                || !preg_match("/[\W]/", $value)
//            ) {
//                $data['password'] = false;
//            }
        } elseif ($key == 'ip') {
            $data['ip'] = filter_var($value, FILTER_VALIDATE_IP);
        } elseif ($key == 'date_de_naissance') {
            $date = new \DateTime();
            $date->setTimestamp($data['date_de_naissance']);
            if ($date != new DateTime()) {
                $data['date_de_naissance'] = false;
            }
        }
        */
    }
    return $data;
    
}

public static function getContent(string $slug) {
    if (!empty($slug) && file_exists($slug)) {
        include_once $slug;
    }
}
public static function validateName($str): bool|string{
    $length = strlen($str);
    if(strlen($str) < 3){
        echo 'Erreur: ' . ' la taille est inférieur a :' . 3;
        die;
    }
    return true;
}


}