<?php

namespace App\Controller;

use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPage extends AbstractController
{
    public function index(): Response
    {
        $serverhost="play.originrealms.com";
        $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$serverhost));
        $playerCounter = $status->players->online;
        $newsInPage=3;
        $repository = $this->getDoctrine()->getRepository(News::class);
        $allNews = $repository->findAll();
        $newsArray=array();
        $nonews=false;
        if($newsInPage>sizeof($newsArray)) {$nonews=true;
        return $this->render('index.html.twig', [
            'nonews' => $nonews,
            'playercount' => $playerCounter
        ]);}
        for($i=0;$i<$newsInPage;$i++){
            $newsArray[$i]=$allNews[$i];
        }
        return $this->render('index.html.twig', [
            'playercount' => $playerCounter,
            'newsArray'=>$newsArray
        ]);
    }
}
