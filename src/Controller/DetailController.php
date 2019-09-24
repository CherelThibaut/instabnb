<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route(
     *     "/detail/{id}",
     *     defaults={1},
     *     name="detail",
     *     requirements={"id"="\d+"}
     * )
     * @param int $id
     * @return Response
     * @throws Exception
     */
    public function index(int $id)
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
            ]];
        return $this->render('detail/index.html.twig', [
            'controller_name' => 'DetailController',
            'announcement' => $announcements[$id],
        ]);
    }
}
