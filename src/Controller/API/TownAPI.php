<?php


namespace App\Controller\API;
use App\Entity\Player;
use App\Entity\Realm;
use App\Entity\Town;
use App\Service\MethodHandler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TownAPI extends APIObject
{

    function addObject(Request $request):array{
        $data = json_decode($request->getContent(), true);
        $Name = $data('Name')??null;
        $Owner =$data('Owner')??null;
        $Realm =$data['Realm']??null;
        $Cash = $data('Cash')??null;
        if($Cash==null) $Cash=0;
        if ($Owner==null||$Name==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Town::class);
        $requestedTown = $repository->findOneBy(['Name'=>$Name]);
        if($requestedTown!=null) return [
            'status' => 400,
            'error' => "Town with this name already exists",
        ];
        $newTown = new Town();
        $newTown->setName($Name);
        $newTown->setOwner($Owner);
        $newTown->setCash($Cash);
        if($Realm!=null) {
            $repository = $this->getDoctrine()->getRepository(Realm::class);
            $realmToFind = $repository->findOneBy(['Name'=>$Realm]);
            if($realmToFind!=null)
                $newTown->setRealm($realmToFind);
            else return [
                'status'=>404,
                'error'=>'Realm not found'
            ];
        }
        $entityManager->persist($newTown);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "Town with name = ".$Name." successfully added!",
        ];
    }
    function removeObject(Request $request):array{
        $name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Town::class);
        $requestedTown = $repository->findOneBy(['Name'=>$name]);
        if ($requestedTown!=null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requestedTown);
            $em->flush();
            return[
                'status' => 200,
                'success' => 'Town with name = '.$name.' has been successfully removed'
            ];
        }
        return[
            'status'=>404,
            'error' => 'Town not found'
        ];
    }
    function getObject(Request $request):array{
        $Name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Town::class);
        $requestedTown = $repository->findOneBy(['Name'=>$Name]);
        if ($requestedTown!=null) {
            $response = [
                'status' => 200,
                'Name' => $requestedTown->getName(),
                'Owner' => $requestedTown->getOwner(),
                'Cash' => $requestedTown->getCash()
            ];
            $players=array();
            foreach ($requestedTown->getPlayerList() as $key => $player) {
                $players[$player->getUUID()] = $player->getNickName();
            }
            $response['Players'] = $players;
            if($requestedTown->getRealm()!=null) $response['Realm']=$requestedTown->getRealm()->getName();
            return $response;

        }
        return [
            'status' => 400,
            'error' => "Town with Name = ".$Name." not found.",
        ];
    }
    function updateObject(Request $request):array{
        $data = json_decode($request->getContent(), true);
        $Name = $data('Name')??null;
        $Owner =$data('Owner')??null;
        $Realm =$data['Realm']??null;
        $Cash = $data('Cash')??null;
        if ($Name==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $updatedTown = $this->getDoctrine()->getRepository(Town::class)->findOneBy(['Name'=>$Name]);
        if($updatedTown==null) return [
            'status' => 200,
            'error' => "Town not found",
        ];
        if($Owner!=null) $updatedTown->setOwner($Owner);
        if($Realm=='null'){
            $updatedTown->setRealm(null);
        } else
        if($Realm!=null) {
            $repository = $this->getDoctrine()->getRepository(Realm::class);
            $realmToFind = $repository->findOneBy(['Name'=>$Realm]);
            if($realmToFind!=null)
                $updatedTown->setRealm($realmToFind);
            else return [
                'status'=>404,
                'error'=>'Realm not found'
            ];
        }
        if($Cash!=null) $updatedTown->setCash($Cash);
        $entityManager->persist($updatedTown);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "Town with Name = ".$Name." successfully updated!",
        ];
    }
}