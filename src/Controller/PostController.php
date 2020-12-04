<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{   
    //On modifie l’annotation de la méthode qui va nous permettre d’afficher un des articles en spécifiant le paramètre id récupéré dans l'url
    //On le rajoute aussi en paramètre de notre méthode
    
    /**
     * @Route("/post/{id}", name="post")
     */
    public function showSinglePost($id, Post $post): Response
    {
        // $post = $postRepository // On récupère Doctrine, la methode getDoctrine est une methode hérité de AbstractController
        // ->find($id); // on récupère le post dont l'id correspond à l'id passé en URL

    // si je n'ai pas d'articles à cet id la
    // if (!$post) {
    //     // alors je retourne "Pas d'article"
    //     return new Response ('Pas d\'article');
        
    // }
    // dans le cas contraire j'affiche l'article
   return $this->render('single_post.html.twig', [
       'post' => $post
   ]);
    }

     
}