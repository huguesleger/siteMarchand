<?php

namespace App\Controller;


use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class HomeController extends AbstractController {


    /**
     * @Route("/", name="home");
     * @param ProduitRepository $repository
     * @return Response
     */
    public function index(ProduitRepository $repository): Response {
        $produits = $repository->findByName();
        return $this->render('front/home.html.twig', [
                    'produits'=> $produits
        ]);

    }

}