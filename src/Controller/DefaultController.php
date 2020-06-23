<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
    extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $article = $this->getDoctrine()->getRepository( Article::class )->find( 1 );

        return $this->render( 'homepage/index.html.twig',
            [
                'pagetitle' => "Page d'accueil",
                'article'   => $article,
            ] );
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render( 'contact/index.html.twig',
            [
                'pagetitle' => "Page contact",
            ] );
    }
}
