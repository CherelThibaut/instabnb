<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route(
     *      "/",
     *     name="home",
     *     schemes={"https"}
     * )
     */

    public function Home() {
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
            ]
        ];
        return $this->render('home.html.twig', [
            'announcements'=>$announcements
        ]);
    }
}