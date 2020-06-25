<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("blog/article/{$id}", name="article")
     */
    public function index($id)
    {
        $article = $this->getDoctrine()->getRepository( Article::class )->find( $id );
        return $this->render('article/index.html.twig', [
            'pagetitle' => $article->getNom($id),
            'categorie' => $article->getCategorie($id),
        ]);
    }
}
