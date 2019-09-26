<?php

namespace App\Controller;

use App\Entity\Announcement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        $announcements = $this->getDoctrine()->getRepository(Announcement::class)->findAll();
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
            'announcements' => $announcements,
        ]);
    }
}
