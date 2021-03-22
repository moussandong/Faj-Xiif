<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier")
 */
class PanierController extends AbstractController
{

    /**
     * @Route("/panier", name="panier_index")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepo)
    {

        $panier = $session->get('panier', []);

        $panierWithData = [];
        foreach ($panier as $id => $quantite) {
            $panierWithData[] = [
                'produit' => $produitRepo->find($id),
                'quantite' => $quantite,
            ];
        }

        $total = 0;
        foreach ($panierWithData as $item) {
            $totalItem = $item['produit']->getPrix() * $item['quantite'];
            $total += $totalItem;
        }

        $session->set('prixTotal', $total);

        return $this->render('panier/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
        ]);
    }

    /**
     * @Route("/panier/add/{id}", name="panier_add")
     */
    public function add($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');
        
    }

      /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface  $session)
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_index');

    }

}
