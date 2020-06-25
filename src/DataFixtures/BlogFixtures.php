<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BlogFixtures
    extends Fixture
{

    public function load( ObjectManager $manager )
    {
        // Création des catégories
        $categorie = new Categorie();
        $categorie->setNom( 'Poulette' );
        $manager->persist( $categorie );

        $categorie2 = new Categorie();
        $categorie2->setNom('Lapin');
        $manager->persist($categorie2);

        $manager->flush();

        // Création des articles
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

        $article3 = new Article();
        $article3->setTitre( "les lapins c'est mignon" )
                 ->setContenu( "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>" )
                 ->setImage( 'lapin.jpg' )
                 ->setDateCreation( new \DateTime() )
                 ->setCategorie( $categorie2 );
        $manager->persist( $article3 );

        $manager->flush();
    }
}
