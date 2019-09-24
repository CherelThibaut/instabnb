<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        $announcements = [
            [
                'id' => 1,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 2,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 3,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 4,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 5,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 6,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 7,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 8,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 9,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
            [
                'id' => 10,
                'title' => '',
                'price' => 0,
                'content' => '',
                'date' => new \DateTime(),
            ],
        ];
        return $this->render('list/index.html.twig', [
            'controller_name' => 'ListController',
            'announcements' => $announcements,
        ]);
    }
}
