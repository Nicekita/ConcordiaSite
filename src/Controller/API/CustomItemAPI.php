<?php


namespace App\Controller\API;


use App\Entity\CustomItem;
use App\Entity\Town;
use Symfony\Component\HttpFoundation\Request;

class CustomItemAPI extends APIObject
{

    function addObject(Request $request): array
    {
        $fileUploader = $this->getFileUploader();
        $Name = $request->request->get('name');
        $craftImage = $request->files->get('craftImage');
        $itemImage = $request->files->get('itemImage');
        $description = $request->request->get('description');
        if ($description==null||$Name==null||$itemImage==null||$craftImage==null){
            return [
                'status' => 400,
                'error' => "Not enough parameters",
            ];
        }
        $entityManager = $this->getDoctrine()->getManager();
        $newItem = new CustomItem();
        $newItem->setName($Name);
        $newItem->setDescription($description);
        $newItem->setCraftImage($fileUploader->upload($craftImage,'../public/img/items'));
        $newItem->setItemImage($fileUploader->upload($itemImage,'../public/img/items'));
        $entityManager->persist($newItem);
        $entityManager->flush();
        return [
            'status' => 200,
            'success' => "CustomItem instance with name = ".$Name." successfully added!",
        ];
    }

    function removeObject(Request $request): array
    {
        $name = $request->query->get('Name');
        $repository = $this->getDoctrine()->getRepository(CustomItem::class);
        $requestedItem = $repository->findOneBy(['Name'=>$name]);
        if ($requestedItem!=null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requestedItem);
            $em->flush();
            return[
                'status' => 200,
                'success' => 'Item with name = '.$name.' has been successfully removed'
            ];
        }
        return[
            'status'=>404,
            'error' => 'Item not found'
        ];
    }

    function updateObject(Request $request): array
    {
        return[
            'status'=>400,
            'error' => 'WrongMethod'
        ];
        // TODO: Implement updateObject() method.
    }

    function getObject(Request $request): array
    {
        return[
            'status'=>400,
            'error' => 'WrongMethod'
        ];
        // TODO: Implement getObject() method.
    }
}