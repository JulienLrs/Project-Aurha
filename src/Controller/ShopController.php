<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('/boutique', name: 'app_shop')]
    public function index(): Response
    {
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'Shop Page',
        ]);
    }
}
