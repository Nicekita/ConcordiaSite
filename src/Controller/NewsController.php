<?php


namespace App\Controller;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController
{
    /*public function add(): Response
    {
        return $this->render('newseditor.html.twig',[
            ]);
    }*/


    public function specific(int $newsid): Response
    {
        $repository = $this->getDoctrine()->getRepository(News::class);
        $news=$repository->find($newsid);
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
        $pageMax=sizeof($allNews)/$newsInPage;
        return $this->render('news.html.twig', [
            'newsarray' => $newsArray,
            'pageMax'=>round($pageMax),
            'currentPage'=>$page+1
        ]);
    }


}

