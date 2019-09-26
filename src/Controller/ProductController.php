<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{
    public function create(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new Product();
        $product->setName('T-shirt');
        $product->setPrice(200);
        $product->setDescription('UFC tshirt');
        // Tell Doctrine you want to save the Product (no queries yet)
        $entityManager->persist($product);
        // Executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return new Response('Saved new product with id '.$product->getId());
    }


    /**
     * @Route("/products/{id}/edit", name="edit_product")
     * @param $id
     * @return Response
     */

    public function edit($id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }
        $entityManager = $this->getDoctrine()->getManager();
        $product->setPrice(300);
        // Execute the update query
        $entityManager->flush();
    }
}