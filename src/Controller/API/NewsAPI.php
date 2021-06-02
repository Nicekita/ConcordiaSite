<?php


namespace App\Controller\API;
use App\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsAPI extends AbstractController
{
    public function news(): Response {
        $request = Request::createFromGlobals();
        $response = new JsonResponse();
        if($request->isMethod('POST')) {
            $response->setData($this->addNews($request));
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
    function addNews(Request $request):array
    {
        if ($request->isMethod('POST')) {
            $Author = $request->request->get('Author');
            $Header = $request->request->get('Header');
            $Text = $request->request->get('Text');
            $Image = $request->request->get('Image');
            if ($Author==null||$Header==null||$Text==null||$Image==null){
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
            $news->setImage($Image);
            $entityManager->persist($news);
            $entityManager->flush();
            return [
                'status' => 200,
                'success' => "News Block added successfully",
            ];
        }
    }
}