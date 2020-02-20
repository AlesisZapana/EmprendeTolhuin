<?php

namespace App\Controller;

use App\Entity\Ambito;
use App\Form\AmbitoType;
use App\Repository\AmbitoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_MUNICIPIO")
 * @Route("/ambito")
 */
class AmbitoController extends AbstractController
{
    /**
     * @Route("/", name="ambito_index", methods={"GET"})
     */
    public function index(AmbitoRepository $ambitoRepository): Response
    {
        return $this->render('ambito/index.html.twig', [
            'ambitos' => $ambitoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ambito_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ambito = new Ambito();
        $form = $this->createForm(AmbitoType::class, $ambito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ambito);
            $entityManager->flush();

            return $this->redirectToRoute('ambito_index');
        }

        return $this->render('ambito/new.html.twig', [
            'ambito' => $ambito,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ambito_show", methods={"GET"})
     */
    public function show(Ambito $ambito): Response
    {
        return $this->render('ambito/show.html.twig', [
            'ambito' => $ambito,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ambito_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ambito $ambito): Response
    {
        $form = $this->createForm(AmbitoType::class, $ambito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ambito_index');
        }

        return $this->render('ambito/edit.html.twig', [
            'ambito' => $ambito,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ambito_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ambito $ambito): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ambito->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ambito);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ambito_index');
    }
}
