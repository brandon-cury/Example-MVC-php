<?php
namespace App\Controller;

require_once __DIR__ . '/../../config.php';
spl_autoload_register(function($class){ require_once  ROOT_PATH . '/' . $class . '.php'; var_dump(ROOT_PATH . '/' . $class . '.php'); });

use App\Lib\Tool;
use App\Model\User;



class UserController{

    private int|null $id = null;
    private string $nom;
    private string $prenom;
    private string $date_de_naissance = '0000-00-00 00:00:00';
    private string $matricule ;

    public function __construct(){
            
    }
    public function create(string $nom, string $prenom, string $matricule, string $date) : bool {
        $bool = false;

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->date_de_naissance = $date;
        
        $data = Tool::validDataType(['nom'=> $this->nom, 'prenom' => $this->prenom, 'matricule' => $this->matricule, 'date_de_naissance' => $this->date_de_naissance]);
        
        $value = User::create($this);

        if (is_int($value)) {
            $this->id = $value;
            $bool = true;
        }
        return $bool;
        
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getMatricule():string{
        return $this->matricule;
    }
    public function getDate():string{
        return $this->date_de_naissance;
    }
    


    private function setId(int $id): void {
        $this->id = $id;
    }
	public function setNom(string $nom): void {
        $this-$nom = $nom;
    }
	public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }
    public function setMatricule(string $matricule): void {
        $this->matricule = $matricule;
    }
	public function setDate(string $date): void {
        $this->date = $date;
    }

    public static function id(int $id) :UserController {
        return User::id($id);
    }
	
    

}