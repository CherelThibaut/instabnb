<?php

namespace App\Controller;

use App\Entity\Announcement;
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
        $announcement = $this->getDoctrine()->getRepository(Announcement::class)->find($id);
        return $this->render('detail/index.html.twig', [
            'controller_name' => 'DetailController',
            'announcement' => $announcement,
        ]);
    }
}
