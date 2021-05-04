<?php

namespace App\Controller;

use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsPage extends AbstractController
{
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(News::class); //todo change findall to specific page finder
        $newsarray = $repository->findAll();
        return $this->render('news.html.twig', [
        'newsarray' => $newsarray,
        ]);
    }
}