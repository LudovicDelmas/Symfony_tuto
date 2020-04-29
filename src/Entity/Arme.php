<?php

namespace App\Entity;

class Arme {

    public $name;
    public $descirption;
    public $degats;

    public static $armes = [];

    public function __construct($name, $description, $degats) {
        $this->name = $name;
        $this->description = $description;
        $this->degats = $degats;
        self::$armes[] = $this;
    }

    public static function creerArmes() {
        $a1 = new Arme(
            "Epee",
            "Une superbe épée bien aiguisée... Idéale pour se raser de près" ,
            35
        );
        $a2 = new Arme(
            "Hache",
            "Une Hache reluisante avec un manche en bois de chêne massif, idéalement équilibrée, parfaite pour le lancer ... non je rigole ... a moins que tu sois Chuck Norris" ,
            40
        );
        $a3 = new Arme(
            "Arc",
            "Un Arc en bois de cèdre monté avec une corde en boyaux de chat, parfait pour la chasse quelque soit le gibier..." ,
            25
        );
    }
    public static function getArmeParNom($name) {
        foreach(self::$armes as $arme) {
            if(strtolower($arme->name) === $name) {
                return $arme;
            }
        }
    }    

}

?>