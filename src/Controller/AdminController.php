<?php

namespace App\Controller;

use App\Entity\Brasserie;
use App\Entity\User;
use App\Form\AdminEditBrasseurType;
use App\Form\AdminEditUserType;
use App\Form\UserType;
use App\Repository\BrasserieRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
        ]);
    }

    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function listUsersAdmin(): Response
    {
        /** @var UserRepository $repository */
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findAll();

        return $this->render('admin/listUsersAdmin.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/admin/edit/user/{id}", name="admin_edit_users")
     */
    public function adminEditUsers($id, Request $request): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class);
        $user = $user->findOneById($id);

        $form = $this->createForm(AdminEditUserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'User modified');
        }


        return $this->render('admin/adminEditUsers.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/admin/delete/user/{id}", name="admin_delete_users")
     */
    public function adminDeleteUsers($id): Response
    {

        $user = $this->getDoctrine()->getRepository(User::class);
        $user = $user->findOneById($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute("admin_users");
    }


    /**
     * @Route("/admin/brasseurs", name="admin_brasseurs")
     */
    public function listBrasseursAdmin(): Response
    {
        /** @var BrasserieRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Brasserie::class);
        $brasseurs = $repository->findAll();

        return $this->render('admin/listBrasseursAdmin.html.twig', [
            'brasseurs' => $brasseurs
        ]);
    }

    /**
     * @Route("/admin/edit/brasseur/{id}", name="admin_edit_brasseurs")
     */
    public function adminEditBrasseurs($id, Request $request): Response
    {
        $brasseur = $this->getDoctrine()->getRepository(Brasserie::class);
        $brasseur = $brasseur->findOneById($id);

        $form = $this->createForm(AdminEditBrasseurType::class, $brasseur);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $em = $this->getDoctrine()->getManager();
            $em->persist($brasseur);
            $em->flush();

            $this->addFlash('success', 'Brasseur modified');
        }


        return $this->render('admin/adminEditBrasseurs.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
