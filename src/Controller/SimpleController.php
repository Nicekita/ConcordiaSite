<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class SimpleController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function about(): Response
    {
        return $this->render('about.html.twig',[
        ]);
    }
    public function admin(): Response
    {
        return $this->render('admin.html.twig',[
        ]);
    }
    public function help(): Response
    {
        return $this->render('help.html.twig',[
        ]);
    }
    public function ban(): Response
    {
        return $this->render('ban.html.twig',[
        ]);
    }
    public function profile(): Response
    {
        return $this->render('profile.html.twig',[
        ]);
    }
}