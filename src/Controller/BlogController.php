<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController
    extends AbstractController
{

    /**
     * @Route("/blog/{id}", name="blog")
     */
    public function index( $id )
    {
        $categorie = $this->getDoctrine()->getRepository( Categorie::class )->find( $id );

        return $this->render( 'blog/index.html.twig',
            [
                'pagetitle' => $categorie->getNom(),
                'categorie' => $categorie,
            ] );
    }

    /**
     * @Route("/blog/article/{id}", name="blog.article")
     */
    public function article( $id )
    {
        $article = $this->getDoctrine()->getRepository( Article::class )->find( $id );

        return $this->render( 'blog/article.html.twig',
            [
                'pagetitle' => $article->getTitre(),
                'article'   => $article,
            ] );
    }
}
