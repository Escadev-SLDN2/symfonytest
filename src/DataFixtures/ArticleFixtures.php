<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures
    extends Fixture
{

    public function load( ObjectManager $manager )
    {
        $article = new Article();
        $article->setTitre( 'Le titre de mon article' )
                ->setContenu( "<p>Le contenu de mon article qu'il est super terrible. Lisez-le, vous serez pas déçu.</p>" )
                ->setImage( 'article.jpg' )
                ->setDateCreation( new \DateTime() );
        $manager->persist( $article );

        $manager->flush();
    }
}
