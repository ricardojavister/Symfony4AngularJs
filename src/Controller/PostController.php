<?php
namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{
    /**
    * @Route("/posts", name="post")
    */
    public function index(): Response
    {
        $posts = $this->getDoctrine()
                    ->getRepository(Post::class)
                    ->findAll();
        return $this->render('posts/list.html.twig', ['posts' => $posts]);
    }
}