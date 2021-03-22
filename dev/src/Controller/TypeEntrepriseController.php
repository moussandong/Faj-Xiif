<?php

namespace App\Controller;

use App\Entity\TypeEntreprise;
use App\Form\TypeEntrepriseType;
use App\Repository\TypeEntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/entreprise")
 */
class TypeEntrepriseController extends AbstractController
{
    /**
     * @Route("/", name="type_entreprise_index", methods={"GET"})
     */
    public function index(TypeEntrepriseRepository $typeEntrepriseRepository): Response
    {
        return $this->render('type_entreprise/index.html.twig', [
            'type_entreprises' => $typeEntrepriseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_entreprise_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeEntreprise = new TypeEntreprise();
        $form = $this->createForm(TypeEntrepriseType::class, $typeEntreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeEntreprise);
            $entityManager->flush();

            return $this->redirectToRoute('type_entreprise_index');
        }

        return $this->render('type_entreprise/new.html.twig', [
            'type_entreprise' => $typeEntreprise,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_entreprise_show", methods={"GET"})
     */
    public function show(TypeEntreprise $typeEntreprise): Response
    {
        return $this->render('type_entreprise/show.html.twig', [
            'type_entreprise' => $typeEntreprise,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_entreprise_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeEntreprise $typeEntreprise): Response
    {
        $form = $this->createForm(TypeEntrepriseType::class, $typeEntreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_entreprise_index');
        }

        return $this->render('type_entreprise/edit.html.twig', [
            'type_entreprise' => $typeEntreprise,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_entreprise_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TypeEntreprise $typeEntreprise): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEntreprise->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeEntreprise);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_entreprise_index');
    }
}
