<?php

namespace App\Controller;

use App\Entity\Rubro;
use App\Form\RubroType;
use App\Repository\RubroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class RubroController extends AbstractController
{
    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/rubros", name="rubro_index", methods={"GET"})
     */
    public function index(RubroRepository $rubroRepository): Response
    {
        return $this->render('rubro/index.html.twig', [
            'rubros' => $rubroRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/rubro/new", name="rubro_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $rubro = new Rubro();
        $form = $this->createForm(RubroType::class, $rubro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rubro);
            $entityManager->flush();

            return $this->redirectToRoute('rubro_index');
        }

        return $this->render('rubro/new.html.twig', [
            'rubro' => $rubro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/rubro/{id}", name="rubro_show", methods={"GET"})
     */
    public function show(Rubro $rubro): Response
    {
        return $this->render('rubro/show.html.twig', [
            'rubro' => $rubro,
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/rubro/{id}/edit", name="rubro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Rubro $rubro): Response
    {
        $form = $this->createForm(RubroType::class, $rubro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rubro_index');
        }

        return $this->render('rubro/edit.html.twig', [
            'rubro' => $rubro,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/rubro/{id}", name="rubro_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Rubro $rubro): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rubro->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($rubro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rubro_index');
    }
    
    /**
     * @Route("/api/rubros",name="api_rubros",methods={"GET"})
     */
    public function api_rubros(RubroRepository $rubroRepository):Response
    {
        $rubros=$rubroRepository->findAll();
        $arrayRubros = [];
        foreach($rubros as $rubro){
            $arrayRubros[] = [                
                'id' => $rubro->getId(),
                'tipo'=>$rubro->getTipo(),
                'sector_productivo'=>$rubro->getSector()->getNombre(),
            ];
        }
        return new JsonResponse($arrayRubros);
    }
}
