<?php

namespace App\Controller\APIs;

use App\Entity\Contacts\Contacts;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api', name: 'api_')]
class ApiContactController extends AbstractController
{
    // #[Route('/set-contact', name: 'set_contact', methods: ['POST', 'OPTIONS'])]
    // public function createContact(Request $request, EntityManagerInterface $manager): JsonResponse
    // {
    //     $contact = new Contacts();

    //     // Décoder les données JSON envoyées par AJAX
    //     $data = json_decode($request->getContent(), true);

    //     if (!$data) {
    //         return $this->json(['success' => false, 'errors' => 'Données JSON invalides'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     try {
    //         // Soumettre les données au formulaire
    //         $contact->setRaisonSociale($data["nomEntreprise"])
    //             ->setNomprenoms($data["nomPrenom"])
    //             ->setEmail($data["email"])
    //             ->setTelephone($data["telephone"])
    //             ->setService(null)
    //             ->setSite("Le passage lumière")
    //             ->setActivite($data["activite"])
    //         ;
    //         $manager->persist($contact);
    //         $manager->flush();

    //         return $this->json(['success' => true, 'message' => 'Votre demande a été envoyée avec succès !']);
        
    //     } catch (\Exception $e) {
    //         // Récupérer les erreurs du formulaire
    //         $errors = [];
    //         array_push($errors, "Caught exception: ".  $e->getMessage() ."\n");
    //         return $this->json(['success' => false, 'errors' => $errors], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    // }
}