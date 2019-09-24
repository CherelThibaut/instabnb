<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index()
    {
        $date = new \DateTime();
        $languages = [
            [
                'language' => 'Symfony',
                'version' => '4.3.4',
            ],
            [
                'language' => 'PHP',
                'version' => '7.2',
            ],
            [
                'language' => 'Node.js',
                'version' => '10.2',
            ],
        ];
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
            'languages' => $languages,
            'date' => $date,
        ]);
    }
}
