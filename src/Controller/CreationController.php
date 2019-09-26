<?php

namespace App\Controller;

use App\DTO\Task;
use App\Entity\Announcement;
use App\Form\TaskType;
use App\Service\AnnouncementService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{

    private $announcementService;

    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;
    }

    /**
     * @Route(
     *      "/annoucements/add",
     *      name="creation",
     *      methods={"GET", "POST"},
     *      schemes={"https"}
     * )
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $announcement = new Announcement();
            $announcement->setTitle($form["title"]->getData());
            $announcement->setPrice($form["price"]->getData());
            $announcement->setContent($form["content"]->getData());
            $announcement->setCreatedAt(new \DateTime('now'));
            $announcementService = new AnnouncementService($this->getDoctrine()->getManager(),
                                $this->getDoctrine()->getRepository(Announcement::class));
            $announcementService->save($announcement);
            return $this->redirectToRoute('home');
        }
        return $this->render('creation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
