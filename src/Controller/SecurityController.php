<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RegistrationFormType;
use Symfony\Component\Security\Core\Security;
use App\Form\EmprendedorType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('emprendimiento_index');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/usuarios", name="usuarios_lista")
     */
    public function usuarios_lista(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'usuarios' => $userRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/usuario/{id}", name="usuario_show", methods={"GET"})
     */
    public function usuario_show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'usuario' => $user,
        ]);
    }

    /**
     * @IsGranted({"ROLE_EMPRENDEDOR","ROLE_INVESTIGADOR"})
     * @Route("/usuario", name="usuario_show_personal", methods={"GET"})
     */
    public function usuario_show_personal(Security $security): Response
    {
        $user =$security->getUser();
        return $this->render('user/show.html.twig', [
            'usuario' => $user,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/usuario/{id}/edit", name="usuario_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $usuario): Response
    {
        $form = $this->createForm(RegistrationFormType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuarios_lista');
        }

        return $this->render('registration/register.html.twig', [
            'mensaje'=> 'Editar usuario',
            'usuario' => $usuario,
            'registrationForm' => $form->createView(),
            'botontext'=>'Editar usuario',
        ]);
    }

    /**
     * @IsGranted({"ROLE_EMPRENDEDOR","ROLE_INVESTIGADOR"})
     * @Route("/user/editar", name="usuario_edit_personal", methods={"GET","POST"})
     */
    public function edit_personal(Request $request,Security $security): Response
    {
        $usuario=$security->getUser();
        $form = $this->createForm(EmprendedorType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuarios_lista');
        }

        return $this->render('registration/register.html.twig', [
            'mensaje'=> 'Editar mi usuario',
            'usuario' => $usuario,
            'registrationForm' => $form->createView(),
            'botontext'=>'Actualizar usuario',
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/usuario/{id}", name="usuario_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('usuarios_lista');
    }
}