<?php

namespace App\Controller;

use App\Entity\Solicitud;
use App\Entity\Foto;
use App\Form\SolicitudType;
use App\Repository\SolicitudRepository;
use App\Repository\EstadosolicitudRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\User;
use App\Entity\Emprendimiento;
use App\Form\EmprendedorType;
use App\Form\EmprendimientoType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SolicitudController extends AbstractController
{
    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/solicitudes", name="solicitud_index", methods={"GET"})
     */
    public function index(SolicitudRepository $solicitudRepository): Response
    {
        return $this->render('solicitud/index.html.twig', [
            'solicituds' => $solicitudRepository->findAll(),
        ]);
    }

    /**
     * @Route("solicitud/new", name="solicitud_new", methods={"GET","POST"})
     */
    public function new(Request $request,EstadosolicitudRepository $estadosolicitudRepository): Response
    {
        $solicitud = new Solicitud();
        $form = $this->createForm(SolicitudType::class, $solicitud);
        $form->handleRequest($request);
        $estado=$estadosolicitudRepository->findOneBy([
            'nombre'=>'Pendiente'
            ]);
        $solicitud->setEstado($estado);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($solicitud);
            $entityManager->flush();

            return $this->redirectToRoute('emprendimiento_index');
        }

        return $this->render('solicitud/new.html.twig', [
            'solicitud' => $solicitud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("solicitud/{id}", name="solicitud_show", methods={"GET"})
     */
    public function show(Solicitud $solicitud): Response
    {
        return $this->render('solicitud/show.html.twig', [
            'solicitud' => $solicitud,
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("solicitud/{id}/edit", name="solicitud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Solicitud $solicitud): Response
    {
        $form = $this->createForm(SolicitudType::class, $solicitud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('solicitud_index');
        }

        return $this->render('solicitud/edit.html.twig', [
            'solicitud' => $solicitud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("solicitud/{id}", name="solicitud_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Solicitud $solicitud): Response
    {
        if ($this->isCsrfTokenValid('delete'.$solicitud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($solicitud);
            $entityManager->flush();
        }

        return $this->redirectToRoute('solicitud_index');
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/solicitud/{id}/usuario", name="solicitud_emprendedor", methods={"GET","POST"})
     */
    public function crearUsuario(Request $request,Solicitud $solicitud,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $usuario=new User();
        $usuario->setApellido($solicitud->getTitularapellido());
        $usuario->setNombre($solicitud->getTitularnombre());
        $usuario->setUsername(strtolower(substr($solicitud->getTitularnombre(),0,1).'.'.$solicitud->getTitularapellido()));
        $usuario->setDni($solicitud->getDni());
        $form = $this->createForm(EmprendedorType::class, $usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario->setRoles(["ROLE_EMPRENDEDOR"]);
            $usuario->setPassword(
                $passwordEncoder->encodePassword(
                    $usuario,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('solicitud_index');
        }

        return $this->render('registration/register.html.twig', [
            'mensaje'=> 'Nuevo Emprendedor',
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/solicitud/{id}/emprendimiento", name="solicitud_emprendimiento", methods={"GET","POST"})
     */
    public function crearEmprendimiento(Request $request,Solicitud $solicitud):Response
    {
        $emprendimiento=new Emprendimiento();
        $emprendimiento->setRazonsocial($solicitud->getRazonsocial());
        $emprendimiento->setCuit($solicitud->getCuit());
        $emprendimiento->setAmbito($solicitud->getAmbito());
        $emprendimiento->setDireccion($solicitud->getDireccion());
        $emprendimiento->setDescripcion($solicitud->getDescripcion());
        $emprendimiento->setLatitud($solicitud->getLatitud());
        $emprendimiento->setLongitud($solicitud->getLongitud());

        $form = $this->createForm(EmprendimientoType::class, $emprendimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            //agregar la persistencia para las fotos y los contactos.
            $archivosFotos=$form->get('fotos')->getData();
            if ($archivosFotos) {

                foreach ($archivosFotos as $imagen) {
                    //el primero
                    $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                    $newFilename = $originalFilename.'-'.uniqid().'.'.$imagen->guessExtension();
                    try {
                        $imagen->move(
                            $this->getParameter('carpeta_imagenes'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        echo "fallo";
                    }
                    //crea la instancia de Foto
                    $foto = new Foto();
                    $foto->setNombreFoto($newFilename);
                    $foto->setEmprendimiento($emprendimiento);
                    //la guarda
                    $entityManager->persist($foto);
                    //$emFoto->flush();
                }
                
            }
            //control
            

            ///////////////////////////////////////////////
            $entityManager->persist($emprendimiento);
            $entityManager->flush();

            return $this->redirectToRoute('solicitud_index');
        }

        return $this->render('emprendimiento/new.html.twig', [
            'emprendimiento' => $emprendimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/solicitud/{id}", name="solicitud_aprobar", methods={"GET","POST"})
     */
    public function aprobarSolicitud(Request $request, Solicitud $solicitud, EstadosolicitudRepository $estadosolicitudRepository): Response
    {
        $solicitud->setEstado($estadosolicitudRepository->findOneBy([
            'nombre'=>'Aprobado'
        ]));
        
        if ($this->isCsrfTokenValid('update'.$solicitud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($solicitud);
            $entityManager->flush();

        }
        return $this->redirectToRoute('emprendimiento_index');
        
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/solicitud/{id}/rechazar", name="solicitud_rechazar", methods={"POST"})
     */
    public function rechazarSolicitud(Request $request, Solicitud $solicitud, EstadosolicitudRepository $estadosolicitudRepository): Response
    {
        $solicitud->setEstado($estadosolicitudRepository->findOneBy([
            'nombre'=>'Rechazado'
        ]));
        if ($this->isCsrfTokenValid('rechazar'.$solicitud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($solicitud);
            $entityManager->flush();

        }
        return $this->redirectToRoute('solicitud_index');
    }
}
