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

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        return $this->render('landingPage/tester.html.twig');
    }

    public function footer(): Response
    {
        return $this->render('landingPage/_footer.html.twig');
    }
}
