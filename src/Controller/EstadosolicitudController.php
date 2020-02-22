<?php

namespace App\Controller;

use App\Entity\Estadosolicitud;
use App\Form\EstadosolicitudType;
use App\Repository\EstadosolicitudRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/estadosolicitud")
 */
class EstadosolicitudController extends AbstractController
{
    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/", name="estadosolicitud_index", methods={"GET"})
     */
    public function index(EstadosolicitudRepository $estadosolicitudRepository): Response
    {
        return $this->render('estadosolicitud/index.html.twig', [
            'estadosolicituds' => $estadosolicitudRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/new", name="estadosolicitud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $estadosolicitud = new Estadosolicitud();
        $form = $this->createForm(EstadosolicitudType::class, $estadosolicitud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($estadosolicitud);
            $entityManager->flush();

            return $this->redirectToRoute('estadosolicitud_index');
        }

        return $this->render('estadosolicitud/new.html.twig', [
            'estadosolicitud' => $estadosolicitud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/{id}", name="estadosolicitud_show", methods={"GET"})
     */
    public function show(Estadosolicitud $estadosolicitud): Response
    {
        return $this->render('estadosolicitud/show.html.twig', [
            'estadosolicitud' => $estadosolicitud,
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/{id}/edit", name="estadosolicitud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Estadosolicitud $estadosolicitud): Response
    {
        $form = $this->createForm(EstadosolicitudType::class, $estadosolicitud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadosolicitud_index');
        }

        return $this->render('estadosolicitud/edit.html.twig', [
            'estadosolicitud' => $estadosolicitud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/{id}", name="estadosolicitud_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Estadosolicitud $estadosolicitud): Response
    {
        if ($this->isCsrfTokenValid('delete'.$estadosolicitud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($estadosolicitud);
            $entityManager->flush();
        }

        return $this->redirectToRoute('estadosolicitud_index');
    }
}
