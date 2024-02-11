<?php
// src/Controller/NewsController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('/news', name: 'news')]
    public function index(): Response
    {
        return $this->render('news/index.html.twig', [
            'news_items' => [
                ['title' => 'Nouvelle 1', 'content' => 'Contenu de la nouvelle 1...'],
                ['title' => 'Nouvelle 2', 'content' => 'Contenu de la nouvelle 2...'],
            ],
        ]);
    }
}