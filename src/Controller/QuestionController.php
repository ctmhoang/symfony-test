<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class QuestionController
{
    public function homepage(): Response
    {
        return new Response('What a controller!');
    }
}