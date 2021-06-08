<?php


namespace App\Controller\API;
use App\Entity\News;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsAPI extends AbstractController
{
    public function news(FileUploader $fileUploader): Response {
        $request = Request::createFromGlobals();
        $response = new JsonResponse();
        if($request->isMethod('POST')) {
            if($request->headers->get('apiKey')!=$this->getParameter('app.apikey')){
                $response->setData([
                    'status'=>400,
                    'error'=>'You have no permission to use this API'
                ]);
                return $response;
            }
            $response->setData($this->addNews($request,$fileUploader));
        } else {
            $response->setData($this->getNews($request));
        }
        return $response;
    }

    function getNews(Request $request):array{
        return [
            'status' => 404,
            'success' => "There is no GET news requests. Try POST",
        ];
    }

    function addNews(Request $request,FileUploader $fileUploader):array
    {
        if ($request->isMethod('POST')) {
            $Author = $request->request->get('Author');
            $Header = $request->request->get('Header');
            $Text = $request->request->get('Text');
            $Image = $request->files->get('Image');
            if ($Author==null||$Header==null||$Text==null){
                return [
                    'status' => 400,
                    'success' => "Not enough parameters",
                ];
            }
            $entityManager = $this->getDoctrine()->getManager();
            $news = new News();
            $news->setAuthor($Author);
            $news->setDate(new \DateTime());
            $news->setHeader($Header);
            $news->setText($Text);
            $news->setImage($fileUploader->upload($Image,'../public/img/news'));
            $entityManager->persist($news);
            $entityManager->flush();
            return [
                'status' => 200,
                'success' => "News Block added successfully",
            ];
        }
        return [
            'status' => 200,
            'success' => "Wrong method used",
        ];
    }
}