<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AddNews extends AbstractController
{
    public function add(): Response
    {
        $param = 'author';
        return $this->render('newseditor.html.twig',[
            'param' => $param,
            ]);
    }
}

