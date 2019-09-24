<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DynamicController extends AbstractController
{
    /**
     * @Route(
     *      "/annoucements/{page}",
     *      name="dynamic",
     *      defaults={"page"="1"},
     *      requirements={"page"="\d+"},
     *     schemes={"https"}
     * )
     * @param int $page
     * @return Response
     */
    public  function DynamicHome(int $page) {
        return new Response('Page number : '.$page);
    }
}