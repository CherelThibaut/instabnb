<?php

namespace App\Controller;

use App\Entity\Announcement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{
    /**
     * @Route("/announcement", name="announcement")
     */

    public function createBasic(): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $announcement = new announcement();
        $announcement->setTitle('Title');
        $announcement->setPrice(200);
        $announcement->setContent('');
        $announcement->setCreatedAt(new \DateTime('now'));
        // Tell Doctrine you want to save the Product (no queries yet)
        $entityManager->persist($announcement);
        // Executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new product with id '.$announcement->getId());
    }

    public function create($title, $price, $content): Response {
        $entityManager = $this->getDoctrine()->getManager();
        $announcement = new announcement();
        $announcement->setTitle($title);
        $announcement->setPrice($price);
        $announcement->setContent($content);
        $announcement->setCreatedAt(new \DateTime('now'));
        // Tell Doctrine you want to save the Product (no queries yet)
        $entityManager->persist($announcement);
        // Executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new product with id '.$announcement->getId());
    }
        /**
         * @Route("/announcement/{id}/edit", name="edit_announcement")
         * @param $id
         * @return Response
         */

        public function edit($id): Response {
            $announcement = $this->getDoctrine()->getRepository(Announcement::class)->find($id);
            if (!$announcement) {
                throw $this->createNotFoundException('No announcement found for id '.$id);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $announcement->setPrice(300);
            // Execute the update query
            $entityManager->flush();
        }

    public function index()
    {
        return $this->render('announcement/index.html.twig', [
            'controller_name' => 'AnnouncementController',
        ]);
    }
}
