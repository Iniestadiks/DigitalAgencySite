<?php
// src/Controller/ClientController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    #[Route('/client/presentation', name: 'client_presentation')]
    public function index(): Response
    {
        return $this->render('client/presentation.html.twig');
    }
}