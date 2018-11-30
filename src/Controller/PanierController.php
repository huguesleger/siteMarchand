<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @method getRequest()
 */
class PanierController extends AbstractController {


    /**
     * @Route("/panier", name="panier")
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function panierShow(ProduitRepository $repository): Response
    {
        $produits = $repository->findAll();
        return $this->render('front/panier.html.twig', ['produits'=>$produits]);

    }

}
