<?php

namespace App\Entity;

class Personnage {

    public $nom;
    public $age;
    public $sexe;
    public $carac = [];

    public static $personnages = [];

    public function __construct($nom, $age, $sexe, $carac) {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function creerPersonnages() {
        $p1 = new Personnage("Marc", 31, true, [
            "force" => 4,
            "agi" => 2,
            "intel" => 3,
        ]);
        $p2 = new Personnage("Milo", 23, true, [
            "force" => 4,
            "agi" => 2,
            "intel" => 3,
        ]);
        $p3 = new Personnage("Tya", 25, false, [
            "force" => 1,
            "agi" => 3,
            "intel" => 5,
        ]);
    }

    public static function getPersonnageParNom($nom) {
        foreach(self::$personnages as $perso) {
            if(strtolower($perso->nom) === $nom) {
                return $perso;
            }
        }
    }

}

?>