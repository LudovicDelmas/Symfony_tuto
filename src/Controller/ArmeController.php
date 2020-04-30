<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/arme", name="arme")
     */
    public function index()
    {
        Arme::creerArmes();
        return $this->render('arme/index.html.twig', [
            "armes" => Arme::$armes
        ]);
    }

    /**
     * @Route("/arme/{name}", name="afficher_arme")
     */
    public function afficherArme($name) 
    {
        Arme::creerArmes();
        $arme = arme::getArmeParNom($name);
        return $this->render('arme/armes.html.twig', [
            "arme" => $arme
        ]);
    }
}
