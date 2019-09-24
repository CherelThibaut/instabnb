<?php

namespace App\Controller;

use App\DTO\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationController extends AbstractController
{
    /**
     * @Route(
     *      "/annoucements/add",
     *      name="creation",
     *      methods={"GET", "POST"},
     *      schemes={"https"}
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function index()
    {
        return $this->render('creation/index.html.twig', [
            'controller_name' => 'CreationController',
        ]);
    }
}
