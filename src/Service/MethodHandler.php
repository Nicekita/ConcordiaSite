<?php


namespace App\Service;


use App\Controller\API\APIObject;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MethodHandler
{
 public static function selectMethodByRequest(Request $request,APIObject $object):Response{

     $response = new JsonResponse();
     $functionName='';

         switch ($request->getMethod()) {
             case 'POST':
                 $data = $object->addObject($request);
                 break;
             case 'GET':
                 $data = $object->getObject($request);
                 break;
             case 'PUT':
                 $data = $object->updateObject($request);
                 break;
             case 'DELETE':
                 $data = $object->removeObject($request);
                 break;
             default:$data = [
                 'status'=>400,
                 'error'=>'method does not exist'

             ];
             break;
         }
     $response->setData($data);
     return $response;
 }
    public static function getName($className) {
        $path = explode('\\', $className);
        return str_replace('API','',array_pop($path));
    }
}