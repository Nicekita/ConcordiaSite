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
    public function index(int $page):Response
    {
        $newsInPage=6;
        $repository = $this->getDoctrine()->getRepository(News::class);
        $allNews = $repository->findAll();
        $newsArray=array();
        for($i=0;$i<$newsInPage&&($page*$newsInPage)+$i<sizeof($allNews);$i++){
            $newsArray[$i]=$allNews[($page*$newsInPage)+$i];
        }
        return $this->render('news.html.twig', [
            'newsarray' => $newsArray,
        ]);
    }


}

