<?php


namespace App\Controller;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController
{
    public function add(): Response
    {
        $param = 'author';
        return $this->render('newseditor.html.twig',[
            'param' => $param,
            ]);
    }
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(News::class); //todo change findall to specific page finder
        $newsarray = $repository->findAll();
        return $this->render('news.html.twig', [
            'newsarray' => $newsarray,
        ]);
    }

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

