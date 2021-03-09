<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Repository\EvenementsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiEvenementsController extends AbstractController
{
    /**
     * @Route("/api/evenements", name="api_evenements", methods={"GET"})
     */
    public function index(EvenementsRepository $evenementsRepository)
    {

        return $this->json($evenementsRepository->findAll(), 200, []);
    }
}
