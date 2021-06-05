<?php


namespace App\Controller\API;
use App\Entity\Player;
use App\Entity\Realm;
use App\Entity\Town;
use App\Service\MethodHandler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class RealmAPI extends APIObject
{

    function addObject(Request $request):array{
        $data = json_decode($request->getContent(), true);
        $Owner = $data['Owner']??null;
        $Name = $data['Name']??null;
        $Capital = $data['Capital']??null;
        $Cash = $data['Cash']??null;
        if($Cash==null) $Cash=0;
        if ($Owner==null||$Name==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Realm::class);
        $requestedRealm = $repository->findOneBy(['Name'=>$Name]);
        if($requestedRealm!=null) return [
            'status' => 400,
            'error' => "Realm with this name already exists",
        ];
        $newRealm = new Realm();
        $newRealm->setName($Name);
        $newRealm->setOwner($Owner);
        $newRealm->setCash($Cash);
        if($Capital==null) {
            return [
                'status'=>404,
                'error'=>'No Capital value'
            ];
        }
        $repository = $this->getDoctrine()->getRepository(Town::class);
        $capitalToFind = $repository->findOneBy(['Name'=>$Capital]);
        if($capitalToFind!=null)
            $newRealm->setCapital($capitalToFind);
        else return [
            'status'=>404,
            'error'=>'Capital not found'
        ];
        $entityManager->persist($newRealm);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "Realm with name = ".$Name." successfully added!",
        ];
    }
    function removeObject(Request $request):array{
        $Name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Realm::class);
        $requestedRealm = $repository->findOneBy(['Name'=>$Name]);
        if ($requestedRealm!=null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requestedRealm);
            $em->flush();
            return[
                'status' => 200,
                'success' => 'Realm with name = '.$Name.' has been successfully removed'
            ];
        }
        return[
            'status'=>404,
            'error' => 'Realm not found'
        ];
    }
    function getObject(Request $request):array{
        $Name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Realm::class);
        $requestedRealm = $repository->findOneBy(['Name'=>$Name]);
        if ($requestedRealm!=null) {
            $response = [
                'status' => 200,
                'Name' => $requestedRealm->getName(),
                'Owner' => $requestedRealm->getOwner(),
                'Capital' => $requestedRealm->getCapital()->getName(),
                'Cash'=>$requestedRealm->getCash()
            ];
            $towns=array();
            foreach ($requestedRealm->getTownlist() as $key => $town) {
                $towns[$key] = $town->getName();
            }
            $response['Towns'] = $towns;
            return $response;
        }
        return [
            'status' => 400,
            'error' => "Realm with Name = ".$Name." not found.",
        ];
    }
    function updateObject(Request $request):array{
        $data = json_decode($request->getContent(), true);
        $Owner = $data['Owner']??null;
        $Name = $data['Name']??null;
        $Capital = $data['Capital']??null;
        $Cash = $data['Cash']??null;
        if ($Name==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $updatedRealm = $this->getDoctrine()->getRepository(Realm::class)->findOneBy(['Name'=>$Name]);
        if($updatedRealm==null) return [
            'status' => 200,
            'error' => "Realm not found",
        ];
        if($Owner!=null) $updatedRealm->setOwner($Owner);
        if($Cash!=null) $updatedRealm->setCash($Cash);
        if($Capital==null) {
            return [
                'status'=>404,
                'error'=>'No Capital value'
            ];
        }
        $repository = $this->getDoctrine()->getRepository(chamTown::class);
        $capitalToFind = $repository->findOneBy(['Name'=>$Capital]);
        if($capitalToFind!=null)
            $updatedRealm->setCapital($capitalToFind);
        else return [
            'status'=>404,
            'error'=>'Capital not found'
        ];
        $entityManager->persist($updatedRealm);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "Realm with Name = ".$Name." successfully updated!",
        ];
    }
}