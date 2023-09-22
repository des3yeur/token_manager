<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HiddenLoginController extends AbstractController
{
    #[Route('/hidden/login', name: 'app_hidden_login')]
    public function index(): Response
    {
        return $this->render('hidden_login/index.html.twig', [
            'controller_name' => 'HiddenLoginController',
        ]);
    }
}
