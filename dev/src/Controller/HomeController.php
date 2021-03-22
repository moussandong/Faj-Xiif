<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Commerce;
use App\Repository\ProduitRepository;
use App\Repository\CommerceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CommerceRepository $commerceRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'commerces' => $commerceRepository->findAll(),
        ]);
    }

    /**
     * @Route("lister/{id}", name="affiche_commerce", methods={"GET","POST"})
     */
    public function afficheCommerce(Commerce $commerce, ProduitRepository $produitRepo): Response
    {
        return $this->render('home/affiche_commerce.html.twig', [
            'controller_name' => 'HomeController',
            'produits' => $produitRepo->commerceProduit($commerce->getId()),

        ]);
    }


}
