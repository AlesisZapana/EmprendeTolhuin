<?php

namespace App\Controller;

use App\Entity\Sectorproductivo;
use App\Form\SectorproductivoType;
use App\Repository\SectorproductivoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_MUNICIPIO")
 * @Route("/sectorproductivo")
 */
class SectorproductivoController extends AbstractController
{
    /**
     * @Route("/", name="sectorproductivo_index", methods={"GET"})
     */
    public function index(SectorproductivoRepository $sectorproductivoRepository): Response
    {
        return $this->render('sectorproductivo/index.html.twig', [
            'sectorproductivos' => $sectorproductivoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sectorproductivo_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sectorproductivo = new Sectorproductivo();
        $form = $this->createForm(SectorproductivoType::class, $sectorproductivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sectorproductivo);
            $entityManager->flush();

            return $this->redirectToRoute('sectorproductivo_index');
        }

        return $this->render('sectorproductivo/new.html.twig', [
            'sectorproductivo' => $sectorproductivo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sectorproductivo_show", methods={"GET"})
     */
    public function show(Sectorproductivo $sectorproductivo): Response
    {
        return $this->render('sectorproductivo/show.html.twig', [
            'sectorproductivo' => $sectorproductivo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sectorproductivo_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Sectorproductivo $sectorproductivo): Response
    {
        $form = $this->createForm(SectorproductivoType::class, $sectorproductivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sectorproductivo_index');
        }

        return $this->render('sectorproductivo/edit.html.twig', [
            'sectorproductivo' => $sectorproductivo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sectorproductivo_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Sectorproductivo $sectorproductivo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sectorproductivo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sectorproductivo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sectorproductivo_index');
    }
}
