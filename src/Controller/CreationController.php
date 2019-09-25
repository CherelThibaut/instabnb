<?php

namespace App\Controller;

use App\DTO\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    /**
     * @Route(
     *      "/annoucements/add",
     *      name="creation",
     *      methods={"GET", "POST"},
     *      schemes={"https"}
     * )
     * @param Request $request
     * @return RedirectResponse|Response
     */

    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('creation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
