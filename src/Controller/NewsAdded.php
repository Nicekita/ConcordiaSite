<?php


namespace App\Controller;
use App\Entity\News;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class NewsAdded extends AbstractController
{
    function added():Response{

        $request =  Request::createFromGlobals();

        $Author = $request->request->get('Author');
        $Date = $request->request->get('Date');
        $Header = $request->request->get('Header');
        $Text = $request->request->get('Text');
        $entityManager = $this->getDoctrine()->getManager();
        $news = new News();
        $news->setAuthor($Author);
        $news->setDate(new \DateTime());
        $news->setHeader($Header);
        $news->setText($Text);
        $entityManager->persist($news);
        $entityManager->flush();
        return new Response("Вы успешно сохранили новость с ID= ".$news->getId());
    }
}