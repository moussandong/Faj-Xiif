<?php

namespace App\Controller;

use App\Entity\Commerce;
use App\Form\CommerceType;
use App\Repository\CommerceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;


/**
 * @Route("/commerce")
 */
class CommerceController extends AbstractController
{
    /**
     * @Route("/", name="commerce_index", methods={"GET"})
     */
    public function index(CommerceRepository $commerceRepository): Response
    {
        return $this->render('commerce/index.html.twig', [
            'commerces' => $commerceRepository->findOneByID($this->getUser()),
        ]);
    }

    /**
     * @Route("/new", name="commerce_new", methods={"GET","POST"})
     */
    function new (Request $request): Response {
        $commerce = new Commerce();
        $form = $this->createForm(CommerceType::class, $commerce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // récupérer l'utilisateur en cours
            $u = $this->getUser();
            $commerce->setProprietaire($u);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commerce);
            $entityManager->flush();

            return $this->redirectToRoute('commerce_index');

        }

        return $this->render('commerce/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commerce_show", methods={"GET"})
     */
    public function show(Commerce $commerce): Response
    {
        return $this->render('commerce/show.html.twig', [
            'commerce' => $commerce,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commerce_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Commerce $commerce): Response
    {
        $form = $this->createForm(CommerceType::class, $commerce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commerce_index');
        }

        return $this->render('commerce/edit.html.twig', [
            'commerce' => $commerce,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commerce_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Commerce $commerce): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commerce->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commerce);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commerce_index');
    }
}
