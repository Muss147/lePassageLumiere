<?php

namespace App\Controller\APIs;

use App\Entity\Contacts;
use App\Form\ContactsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api', name: 'api_')]
class ApiContactController extends AbstractController
{
    #[Route('/set-contact', name: 'set_contact', methods: ['POST'])]
    public function createContact(Request $request, EntityManagerInterface $manager): JsonResponse
    {
        $contact = new Contacts();
        $form = $this->createForm(ContactsType::class, $contact);

        // Décoder les données JSON envoyées par AJAX
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json(['success' => false, 'errors' => 'Données JSON invalides'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Soumettre les données au formulaire
        $form->submit($data);

        // Vérifier la validité du formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($contact);
            $manager->flush();

            return $this->json(['success' => true, 'message' => 'Votre demande a été envoyée avec succès !']);
        }

        // Récupérer les erreurs du formulaire
        $errors = [];
        foreach ($form->getErrors(true, false) as $error) {
            $errors[] = $error->getMessage();
        }

        return $this->json(['success' => false, 'errors' => $errors], JsonResponse::HTTP_BAD_REQUEST);
    }
}