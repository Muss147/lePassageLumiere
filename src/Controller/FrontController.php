<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontController extends AbstractController
{
    public function header(): Response
    {
        return $this->render('landingPage/_header.html.twig');
    }

    #[Route('/', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('landingPage/home.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
