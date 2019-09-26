<?php

namespace App\Controller;

use App\DTO\Task;
use App\Entity\Announcement;
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
     * @throws \Exception
     */

    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $aC = new AnnouncementController();
            $announcement = new Announcement();
            $announcement->setTitle($form["title"]->getData());
            $announcement->setPrice($form["price"]->getData());
            $announcement->setContent($form["content"]->getData());
            $entityManager = $this->getDoctrine()->getManager();
            $announcement->setCreatedAt(new \DateTime('now'));
            // Tell Doctrine you want to save the Product (no queries yet)
            $entityManager->persist($announcement);
            // Executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('creation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
