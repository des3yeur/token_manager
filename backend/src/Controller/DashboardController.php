<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class DashboardController extends AbstractController
{
    #[Route('/profil', name: 'app_dashboard')]
    public function index(SerializerInterface $serializer): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'user' => $serializer->serialize($this->getUser(), 'jsonld')
        ]);
    }
}
