<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public function number($firstname, $lastname): Response
    {
        $data = array(
            "param1" => $firstname,
            "param2" => $lastname
        );
        dump($data);
        return $this->render('lucky/lucky.html.twig', $data);
    }

    /**
     * @Route("/hello")
     */
    public function hello(): Response
    {
        return new Response(
            "<html><body>Hello</body></html>"
        );
    }
}
