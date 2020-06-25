<?php

namespace App\Service;

use App\Repository\CategorieRepository;

class CategoriesService
{

    private $categorieRepository;

    public function __construct( CategorieRepository $categorieRepository )
    {
        $this->categorieRepository = $categorieRepository;
    }

    public function getCategoriesList()
    {
        $categories = $this->categorieRepository->findAll();

        return $categories;
    }

}
