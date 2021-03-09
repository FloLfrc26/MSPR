<?php

namespace App\Controller;

use App\Entity\InfosUrgentes;
use App\Repository\InfosUrgentesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiInfosUrgentesController extends AbstractController
{
    /**
     * @Route("/api/infos/urgentes", name="api_infos_urgentes", methods={"GET"})
     */
    public function index(InfosUrgentesRepository $infosUrgentesRepository)
    {

        return $this->json($infosUrgentesRepository->findAll(), 200, []);
    }
}
