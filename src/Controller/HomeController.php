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
     *     name="home"
     * )
     */

    public function Home() {
        return new Response('<html><body>Home</body></html>');
    }
}