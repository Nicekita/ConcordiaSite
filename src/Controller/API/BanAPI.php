<?php


namespace App\Controller\API;


use App\Entity\Ban;
use App\Entity\Town;
use Symfony\Component\HttpFoundation\Request;

class BanAPI extends APIObject
{

    function addObject(Request $request): array
    {
        $data = json_decode($request->getContent(), true);
        $Name = $data['Nickname'] ?? null;
        $stDate = $data['stDate'] ?? null;
        $endDate = $data['endDate'] ?? null;
        $reason = $data['reason'] ?? null;
        if ($stDate==null||$Name==null||$endDate==null||$reason==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $newBan = new Ban();
        $newBan->setEndingDate($endDate);
        $newBan->setNickname($Name);
        $newBan->setStartingDate($stDate);
        $newBan->setReason($reason);
        $entityManager->persist($newBan);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "Ban instance with name = ".$Name." successfully added!",
        ];
    }

    function removeObject(Request $request): array
    {
        $name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Ban::class);
        $requestedBan = $repository->findOneBy(['Name'=>$name]);
        if ($requestedBan!=null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requestedBan);
            $em->flush();
            return[
                'status' => 200,
                'success' => 'Ban with name = '.$name.' has been successfully removed'
            ];
        }
        return[
            'status'=>404,
            'error' => 'Ban not found'
        ];
    }

    function updateObject(Request $request): array
    {
        return[
            'status'=>400,
            'error' => 'WrongMethod'
        ];
    }

    function getObject(Request $request): array
    {
        return[
            'status'=>400,
            'error' => 'WrongMethod'
        ];
    }
}