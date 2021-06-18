<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @Route("/", name="default")
     */
    public function index($search = null, PostRepository $postRepo): Response
    {

        if (!empty($search)) {
            $items = $postRepo->search($search);
        } else {
            $items = $postRepo->findAll();
        }
        return $this->render('home/index.html.twig', [
            'items' => $items,
        ]);
    }
}
