<?php

namespace App\Controller;

use App\Entity\Announcement;
use App\Service\AnnouncementService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        $announcementService = new AnnouncementService($this->getDoctrine()->getManager(),
                            $this->getDoctrine()->getRepository(Announcement::class));
        $announcements = $announcementService->findAnnouncements();
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
            'announcements' => $announcements,
        ]);
    }
}
