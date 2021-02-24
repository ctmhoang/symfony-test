<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('What a controller!');
    }

    /**
     * @Route ("/questions/{slug}")
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        $ans = ['Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, molestiae!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, molestiae!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, molestiae!'];
        return $this->render('question/show.html.twig', ['question' => ucwords(str_replace("-", " ", $slug)),
            'ans' => $ans]);
    }
}