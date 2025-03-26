<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Form\ContactsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class FrontController extends AbstractController
{
    public function header(): Response
    {
        return $this->render('landingPage/_header.html.twig');
    }

    #[Route('/', name: 'app_front')]
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        return $this->render('landingPage/home.html.twig');
    }

    public function footer(): Response
    {
        return $this->render('landingPage/_footer.html.twig');
    }
}
