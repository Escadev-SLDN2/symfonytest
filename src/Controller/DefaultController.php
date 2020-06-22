<?php

namespace App\Controller;

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
        return $this->render( 'homepage/index.html.twig',
            [
                'pagetitle' => "Page d'accueil",
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
