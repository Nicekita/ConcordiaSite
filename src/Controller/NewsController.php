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
        return $this->render('newseditor.html.twig',[
            ]);
    }
    public function specific(int $newsID): Response
    {
        $repository = $this->getDoctrine()->getRepository(News::class);
        $news=$repository->find($newsID);
        return $this->render('specNews.html.twig',[
            'news' => $news,
        ]);
    }
    public function index(int $page):Response
    {

        $newsInPage=6;
        $repository = $this->getDoctrine()->getRepository(News::class);
        $allNews = $repository->findAll();
        $newsArray=array();
        if($page*$newsInPage>=sizeof($allNews)) $page=0;
        for($i=0;$i<$newsInPage&&($page*$newsInPage)+$i<sizeof($allNews);$i++){
            $newsArray[$i]=$allNews[($page*$newsInPage)+$i];
        }
        return $this->render('news.html.twig', [
            'newsarray' => $newsArray,
        ]);
    }


}

