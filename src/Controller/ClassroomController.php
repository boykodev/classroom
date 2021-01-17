<?php

namespace App\Controller;

use App\Entity\Classroom;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @Route("/api/classrooms/{id}/activate/", name="clasroom_activate", methods={"POST"})
     * @param Classroom $classroom
     *
     * @return Response
     */
    public function activate(Classroom $classroom): Response
    {
        // todo: activate class
        return new JsonResponse();
    }

    /**
     * @Route("/api/classrooms/{id}/deactivate/", name="clasroom_deactivate", methods={"POST"})
     * @param Classroom $classroom
     *
     * @return Response
     */
    public function deactivate(Classroom $classroom): Response
    {
        // todo: deactivate class
        return new JsonResponse();
    }
}
