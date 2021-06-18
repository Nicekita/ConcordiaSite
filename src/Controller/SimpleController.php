<?php


namespace App\Controller;


use App\Entity\Ban;
use App\Entity\CustomItem;
use App\Entity\Player;
use App\Service\GetJSON;
use Exception;
use Symfony\Component\HttpFoundation\Response;

class SimpleController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function about(): Response
    {
        return $this->render('about.html.twig',[
        ]);
    }
    public function help(): Response
    {
        $repository = $this->getDoctrine()->getRepository(CustomItem::class);
        $allItems=$repository->findAll();
        return $this->render('help.html.twig',[
            'allItems'=>$allItems
        ]);
    }
    public function profile($userid,GetJSON $JSON): Response
    {
        try {
            $jsonRequest = $JSON->decode('https://playerdb.co/api/player/minecraft/' . $userid);
            $imageUrl=$jsonRequest->data->player->avatar;
        }
        catch (Exception $e){
            $imageUrl = null;
        }
        $repository = $this->getDoctrine()->getRepository(Player::class);
        $requestedPlayer = $repository->findOneBy(['UUID'=>$userid]);
        $data = [
            'Nick'=>$requestedPlayer->getNickName(),
            'Cash'=>$requestedPlayer->getCash(),
            'Image'=>$imageUrl
        ];
        if($requestedPlayer->getTown()!=null){
            $data['TownName']=$requestedPlayer->getTown()->getName();
            $data['TownCash']=$requestedPlayer->getTown()->getCash();
            $data['TownOwner']=$requestedPlayer->getTown()->getOwner();
        }
        else {
            $data['TownName']=null;
            $data['TownCash']=null;
            $data['TownOwner']=null;
        }

        return $this->render('profile.html.twig',$data);
    }
    public function map(){
        return $this->render('map.html.twig');
    }
}