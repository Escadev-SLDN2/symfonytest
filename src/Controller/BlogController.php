<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Entity\Article;

class BlogController extends AbstractController
{

    /**
     * @Route("/blog/article/{id}", name="article")
     */
    public function articles($id){
        $article = $this->getDoctrine()->getRepository( Article::class )->find($id);
        return $this->render('blog/article.html.twig', [
            'pagetitle' => $article->getTitre(),
            'article'  =>  $article,
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog")
     */
    public function index($id)
    {
        $categorie = $this->getDoctrine()->getRepository( Categorie::class )->find( $id );
        return $this->render('blog/index.html.twig', [
            'pagetitle' =>  $categorie->getNom(),
            'categorie' =>  $categorie,
        ]);
    }

    
}
