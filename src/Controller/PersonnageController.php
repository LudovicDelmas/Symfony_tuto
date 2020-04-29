<?php

namespace App\Controller;

use App\Entity\Personnage;
use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }


    /**
     * @Route("/persos", name="personnages")
     */
    public function persos()
    {
        Personnage::creerPersonnages();
        return $this->render('personnage/persos.html.twig', [
            "players" => Personnage::$personnages
        ]);
    }

    /**
     * @Route("/persos/{nom}", name="afficher_personnage")
     */
    public function afficherPerso($nom) 
    {
        Personnage::creerPersonnages();
        $perso = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/perso.html.twig', [
            "perso" => $perso
        ]);
    }

    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Arme::creerArmes();
        return $this->render('armes/armes.html.twig', [
            "armes" => Arme::$armes
        ]);
    }

    /**
     * @Route("/armes/{name}", name="afficher_arme")
     */
    public function afficherArme($name) 
    {
        Arme::creerArmes();
        $arme = arme::getArmeParNom($name);
        return $this->render('armes/arme.html.twig', [
            "arme" => $arme
        ]);
    }
}
