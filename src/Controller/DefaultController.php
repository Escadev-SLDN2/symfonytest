<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class DefaultController
    extends AbstractController
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $article = $this->getDoctrine()->getRepository( Article::class )->find( 1 );

        return $this->render( 'homepage/index.html.twig',
            [
                'pagetitle' => ucfirst($this->translator->trans('homepage.title')),
                'article'   => $article,
            ] );
    }

    /**
     * @Route({"fr": "/contact", "de": "/kontakt"}, name="contact")
     */
    public function contact()
    {
        return $this->render( 'contact/index.html.twig',
            [
                'pagetitle' => ucfirst($this->translator->trans('contact.title')),
            ] );
    }
}
