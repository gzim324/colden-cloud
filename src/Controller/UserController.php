<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SettingsType;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserController extends Controller
{
    /**
     * @Route("/users", name="user_index")
     * @Template("user/index.html.twig")
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $selectUsers = $this->getDoctrine()->getRepository(User::class)->findAll();

        return array(
            'selectUsers' => $selectUsers
        );
    }

    /**
     * @Route("/new-user", name="new_user")
     * @Template("user/newUser.html.twig")
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newUserAction(Request $request)
    {
        $user = new User();

        $formUser = $this->createForm(UserType::class, $user);

        $formUser->handleRequest($request);
        if($request->isMethod('POST')) {
            if($formUser->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $user->setEnabled(1);
                $user->setEmail("user@user.user");
                $entityManager->persist($user);
                $entityManager->flush();

                $formUser->getData();
                return $this->redirectToRoute("user_index");
            }
        }

        return array(
            'formUser' => isset($formUser) ? $formUser->createView() : NULL
        );
    }

    /**
     * @Route("/deactivate/user/{id}", name="deactivate_user")
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAccountAction($id) {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $user->setEnabled(false);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/restore/user/{id}", name="restore_user")
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function restoreAccountAction($id) {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $user->setEnabled(true);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/update-user/{id}", name="update_user")
     * @Template("user/updateUser.html.twig")
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Security("has_role('ROLE_ADMIN')")
     * @param Request $request
     */
    public function updateUserAction(Request $request, $id) {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $formUser = $this->createForm(UserType::class, $user);

        $formUser->handleRequest($request);
        if($request->isMethod('POST')) {
            if($formUser->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $user->setEmail("user@user.user");
                $entityManager->persist($user);
                $entityManager->flush();

                $formUser->getData();
                return $this->redirectToRoute("user_index");
            }
        }

        return array(
            'formUser' => isset($formUser) ? $formUser->createView() : NULL
        );
    }

    /**
     * @Route("/settings/{id}", name="user_settings")
     * @param User $user
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function settingsAction(Request $request, User $user)
    {
        if($this->getUser() != $user->getUsername()) {
            throw new AccessDeniedException();
        }

        $formSettings = $this->createForm(SettingsType::class, $user);
        if($request->isMethod('POST')) {
            $formSettings->handleRequest($request);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute("user_index");
        }

        return array(
            'formSettings' => $formSettings->createView()
        );
    }
}
