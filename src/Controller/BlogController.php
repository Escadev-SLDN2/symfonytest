<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{id}", name="blog")
     */
    public function index($id)
    {
        $categorie = $this->getDoctrine()->getRepository( Categorie::class )->find( $id );
        return $this->render('blog/index.html.twig', [
            'pagetitle' => $categorie->getNom(),
            'categorie' => $categorie,
        ]);
    }
}
