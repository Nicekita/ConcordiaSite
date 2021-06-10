<?php


namespace App\Controller\API;
use App\Entity\Player;
use App\Entity\Town;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PlayerAPI extends APIObject
{

        function addObject(Request $request):array{

            $data = json_decode($request->getContent(), true);
            $UUID = $data['UUID'] ?? null;
            $Nickname = $data['Nickname'] ?? null;
            $Town = $data['Town'] ?? null;
            $Cash = $data['Cash'] ?? 0;
            if ($UUID==null||$Nickname==null){
                return [
                    'status' => 400,
                    'error' => "Not enough parameters",
                ];
            }
            $entityManager = $this->getDoctrine()->getManager();
            $repository = $this->getDoctrine()->getRepository(Player::class);
            $requestedPlayer = $repository->findOneBy(['UUID'=>$UUID]);
            if($requestedPlayer!=null) return [
                'status' => 400,
                'error' => "Player with this UUID already exists",
            ];
            $newPlayer = new Player();
            $newPlayer->setNickName($Nickname);
            $newPlayer->setUUID($UUID);
            $newPlayer->setCash($Cash);
            if($Town!=null) {
                $repository = $this->getDoctrine()->getRepository(Town::class);
                $townToFind = $repository->findOneBy(['Name'=>$Town]);
                if($townToFind!=null)
                $newPlayer->setTown($townToFind);
                else return [
                    'status'=>404,
                    'error'=>'Town not found'
                ];
            }
            $entityManager->persist($newPlayer);
            $entityManager->flush();
            return [
                'status' => 200,
                'success' => "Player with UUID = ".$UUID." successfully added!",
            ];
        }
        function removeObject(Request $request):array{
            $UUID = $request->query->get('UUID');
            $repository = $this->getDoctrine()->getRepository(Player::class);
            $requestedPlayer = $repository->findOneBy(['UUID'=>$UUID]);
            if ($requestedPlayer!=null) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($requestedPlayer);
                $em->flush();
                return[
                'status' => 200,
                'success' => 'Player with UUID = '.$UUID.' has been successfully removed'
            ];
            }
            return[
                'status'=>404,
                'error' => 'Player not found'
            ];
        }
        function getObject(Request $request):array{
            $UUID = $request->query->get('UUID');
            $repository = $this->getDoctrine()->getRepository(Player::class);
            $requestedPlayer = $repository->findOneBy(['UUID'=>$UUID]);
            if ($requestedPlayer==null) return [
                'status' => 400,
                'error' => "Player with UUID = ".$UUID." not found.",
            ];
            $response = [
                'status' => 200,
                'UUID' =>$requestedPlayer->getUUID(),
                'Nickname' =>$requestedPlayer->getNickName(),
                'Cash'=>$requestedPlayer->getCash()
            ];
            if ($requestedPlayer->getTown()!=null) $response['Town']=$requestedPlayer->getTown()->getName();
            return $response;

        }
    function getObjectbyName(Request $request):Response{
        $Name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(Player::class);
        $requestedPlayer = $repository->findOneBy(['NickName'=>$Name]);
        $jsresponse = new JsonResponse();
        if ($requestedPlayer==null) {$jsresponse->setData( [
            'status' => 400,
            'error' => "Player with Name = ".$Name." not found.",
        ]);
            return $jsresponse;
        }
        $response = [
            'status' => 200,
            'UUID' =>$requestedPlayer->getUUID(),
            'Nickname' =>$requestedPlayer->getNickName(),
            'Cash'=>$requestedPlayer->getCash()
        ];
        if ($requestedPlayer->getTown()!=null) $response['Town']=$requestedPlayer->getTown()->getName();
        $jsresponse->setData($response);
        return $jsresponse;

    }
        function updateObject(Request $request):array{
            $data = json_decode($request->getContent(), true);
            $UUID = $data['UUID'] ?? null;
            $Nickname = $data['Nickname'] ?? null;
            $Town = $data['Town'] ?? null;
            $Cash = $data['Cash'] ?? 0;
            if ($UUID==null){
                return [
                    'status' => 400,
                    'error' => "Not enough parameters",
                ];
            }
            $entityManager = $this->getDoctrine()->getManager();
            $updatedPlayer = $this->getDoctrine()->getRepository(Player::class)->findOneBy(['UUID'=>$UUID]);
            if($updatedPlayer==null) return [
                'status' => 200,
                'error' => "Player not found",
            ];
            if($Nickname!=null) $updatedPlayer->setNickName($Nickname);
            if($Cash!= null) $updatedPlayer->setCash($Cash);
            if($Town=='null'){
                $updatedPlayer->setTown(null);
            } else
            if($Town!=null) {
                $repository = $this->getDoctrine()->getRepository(Town::class);
                $townToFind = $repository->findOneBy(['Name'=>$Town]);
                if($townToFind!=null)
                    $updatedPlayer->setTown($townToFind);
                else return [
                    'status'=>404,
                    'error'=>'Town not found'
                ];
            }
            $entityManager->persist($updatedPlayer);
            $entityManager->flush();
            return [
                'status' => 200,
                'success' => "Player with UUID = ".$UUID." successfully updated!",
            ];
        }
}