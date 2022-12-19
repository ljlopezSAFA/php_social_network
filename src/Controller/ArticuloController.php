<?php

namespace App\Controller;


use App\Repository\ArticuloRepository;
use App\Utilities\Utilidades;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ArticuloController extends AbstractController
{







    /**
     * @Route("/articulo", name="app_articulo")
     */
    public function index(ArticuloRepository $articuloRepository, Utilidades $utilidades):JsonResponse
    {
        //Obtenemos los datos
        $list_articulos = $articuloRepository->findAll();

        //Transformar a Json
        $json = $utilidades->toJson($list_articulos);

        return new JsonResponse($json, 200, [], true);
    }
}
