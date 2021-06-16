<?php


namespace App\Controller;


use App\Entity\Ban;
use App\Entity\CustomItem;
use App\Entity\Player;
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
        $repository = $this->getDoctrine()->getRepository(CustomItem::class);
        $allItems=$repository->findAll();
        return $this->render('help.html.twig',[
            'allItems'=>$allItems
        ]);
    }
    public function ban(): Response
    {
        $data = array();
        $repository = $this->getDoctrine()->getRepository(Ban::class);
        $allBans = $repository->findAll();
        return $this->render('ban.html.twig',[
            'allBans'=>$allBans
        ]);
    }
    public function profile($userid): Response
    {
        $data = json_decode(file_get_contents('https://playerdb.co/api/player/minecraft/'.$userid));
        $error=false;
        if($userid==null) $error=true;
        $repository = $this->getDoctrine()->getRepository(Player::class);
        $requestedPlayer = $repository->findOneBy(['UUID'=>$userid]);
        $data = [
            'error'=>$error,
            'Nick'=>$requestedPlayer->getNickName(),
            'Cash'=>$requestedPlayer->getCash(),
            'Image'=>$data->data->player->avatar
        ];
        if($requestedPlayer->getTown()!=null){
            $data['Town']=$requestedPlayer->getTown();
        } else $data['Town']=null;
        return $this->render('profile.html.twig',$data);
    }
}