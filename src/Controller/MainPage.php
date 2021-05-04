<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPage extends AbstractController
{
    public function index(): Response
    {
        $playercounter = 22;

        return $this->render('index.html.twig', [
            'playercount' => $playercounter,
        ]);
    }
}
