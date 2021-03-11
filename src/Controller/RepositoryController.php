<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RepositoryController extends AbstractController
{
    /**
     * @Rest\Get("/repositories")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RepositoryController.php',
        ]);
    }

    /**
     * @Rest\Get("/repositories/{id}")
     */
    public function readRepository($id)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RepositoryController.php',
            'id' => $id,
        ]);
    }
}
