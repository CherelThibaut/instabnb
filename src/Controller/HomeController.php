<?php
namespace App\Controller;

use App\Entity\Announcement;
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
        $announcements = $this->getDoctrine()->getRepository(Announcement::class)->findAll();
        return $this->render('home.html.twig', [
            'announcements'=>$announcements
        ]);
    }
}