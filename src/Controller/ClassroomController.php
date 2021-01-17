<?php

namespace App\Controller;

use App\Entity\Classroom;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassroomController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/api/classrooms/{id}/activate/", name="clasroom_activate", methods={"POST"})
     * @param Classroom $classroom
     *
     * @return Response
     */
    public function activate(Classroom $classroom): Response
    {
        return new JsonResponse(
            [
                'active' => $this->changeClassroomStatus($classroom, true)
            ]
        );
    }

    /**
     * @Route("/api/classrooms/{id}/deactivate/", name="clasroom_deactivate", methods={"POST"})
     * @param Classroom $classroom
     *
     * @return Response
     */
    public function deactivate(Classroom $classroom): Response
    {
        return new JsonResponse(
            [
                'active' => $this->changeClassroomStatus($classroom, false)
            ]
        );
    }

    private function changeClassroomStatus(Classroom $classroom, bool $status) : bool
    {
        $classroom->setIsActive($status);
        $this->entityManager->persist($classroom);
        $this->entityManager->flush($classroom);

        return $status;
    }
}
