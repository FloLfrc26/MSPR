<?php

namespace App\Controller;

use App\Entity\InfosActualites;
use App\Repository\InfosActualitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiInfosActualitesController extends AbstractController
{
    /**
     * @Route("/api/infos/actualites", name="api_infos_actualites", methods={"GET"})
     */
    public function index(InfosActualitesRepository $infosActualitesRepository)
    {

        return $this->json($infosActualitesRepository->findAll(), 200, []);
    }
}
