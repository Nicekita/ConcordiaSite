<?php


namespace App\Controller\API;


use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class APIObject extends AbstractController
{
    private $fileUploader;
    protected function getFileUploader():FileUploader{
        return $this->fileUploader;
    }
    function init(FileUploader $fileUploader):Response{
        $this->fileUploader=$fileUploader;
        $request = Request::createFromGlobals();
        $response = new JsonResponse();
        //get gets through
        if($request->getMethod()=='GET'){
            $response->setData($this->getObject($request));
            return $response;
        }
        //for everything else, we look for apikey
        if($request->headers->get('apiKey')!=$this->getParameter('app.apikey')){
            $response->setData([
                'status'=>400,
                'error'=>'You have no permission to use this API'
            ]);
            return $response;
        }

        switch ($request->getMethod()) {
            case 'POST':
                $data = $this->addObject($request);
                break;
            case 'PUT':
                $data = $this->updateObject($request);
                break;
            case 'DELETE':
                $data = $this->removeObject($request);
                break;
            default:
                $data = [
                'status'=>400,
                'error'=>'method does not exist'
                ];
                break;
        }
        $response->setData($data);
        return $response;
    }
    protected abstract function addObject(Request $request):array;
    protected abstract function removeObject(Request $request):array;
    protected abstract function updateObject(Request $request):array;
    protected abstract function getObject(Request $request):array;
}