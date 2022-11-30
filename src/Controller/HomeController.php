<?php

namespace App\Controller;

use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(HomeRepository $homeRepository): Response
    {
        // Puisqu'il y a injection de dependence on utilise l'ojbet representé
        // par la variable $homeRepository pour aller chercher des données dans la BDD
        $home = $homeRepository->findOneBy(["isActive" => 1]);

        // On fait un die and dump pour voir le résultat récupéré
        // dd($home);

        // On déclenche le rendu de la vue associée à al route (index.html.twig du dossier home)
        // et on passe à la vue les données qu'elle doit gérer.
        return $this->render('home/index.html.twig', [
            'pageAccueil' => $home,
        ]);
    }
}
