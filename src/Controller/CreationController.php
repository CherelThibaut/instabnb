<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    /**
     * @Route(
     *      "/annoucements/add",
     *      name="creation",
     * )
     * @return Response
     */

    public  function DynamicHome() {
        return new Response('Creation Page');
    }
}