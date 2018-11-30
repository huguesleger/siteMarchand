<?php


namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{

    /**
     * @var ProduitRepository
     *
     */
    private $repository;

    public function __construct(ProduitRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/produits/{id}", name="produit");
     * @param $id
     * @return Response
     */
    public function show($id): Response {
        $produit = $this->repository->find($id);
        return $this->render('front/produit.html.twig', [
            'produit'=> $produit,
        ]);


    }


}