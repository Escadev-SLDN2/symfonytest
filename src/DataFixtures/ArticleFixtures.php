<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures
    extends Fixture
{

    public function load( ObjectManager $manager )
    {
        $categorie = new Categorie();
        $categorie->setNom( 'Poulette' );
        $manager->persist( $categorie );

        $manager->flush();

        $article = new Article();
        $article->setTitre( 'Le titre de mon article' )
                ->setContenu( "<p>Le contenu de mon article qu'il est super terrible. Lisez-le, vous serez pas déçu.</p>" )
                ->setImage( 'article.jpg' )
                ->setDateCreation( new \DateTime() )
                ->setCategorie( $categorie );
        $manager->persist( $article );

        $article2 = new Article();
        $article2->setTitre( 'Le titre de mon second article' )
                ->setContenu( "<p>Le contenu de mon article qu'il est super terrible. Lisez-le, vous serez pas déçu.</p>" )
                ->setImage( 'article.jpg' )
                ->setDateCreation( new \DateTime() )
                ->setCategorie( $categorie );
        $manager->persist( $article2 );

        $manager->flush();
    }
}
