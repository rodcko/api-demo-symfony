<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RepositoryController extends AbstractController
{
    /**
     * @Rest\Get("/repositories")
     *
     * @SWG\Response (
     *     response=200,
     *     description="Returns a list of repositories"
     * )
     *
     * @SWG\Tag(name="repositories")
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
     *
     * @SWG\Response(
     *     response=200,
     *     description="Returns a repository"
     * )
     *
     * @SWG\Response(
     *     response=404,
     *     description="Repository not found"
     *
     * )
     *
     * @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     type="string",
     *     description="Identifier of the repository"
     *
     * )
     *
     * @SWG\Tag(name="repositories")
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
