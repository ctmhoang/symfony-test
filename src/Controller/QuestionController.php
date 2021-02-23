<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        $slug = ucwords(str_replace("-", " ", $slug));
        return new Response("placeholder text for $slug future page");
    }
}