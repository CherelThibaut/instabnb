<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route(
     *      "/annoucements/{id}/detail",
     *      name="detail",
     *      requirements={"id"="\d+"}
     * )
     * @param int $id
     * @return Response
     */
    public  function DynamicDetailHome(int $id) {
        return new Response('Detail Page number : '.$id);
    }
}