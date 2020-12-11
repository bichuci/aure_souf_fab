<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/admin/users/edit/{id}", name="admin_edit_users")
     */
    public function adminEditUsers($id): Response
    {
        /** @var UserRepository $repository */
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->showAdminDetailsUsers($id);

        return $this->render('admin/adminEditUsers.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/admin/brasseurs", name="admin_brasseurs")
     */
    public function listBrasseursAdmin(): Response
    {




        return $this->render('admin/index.html.twig', [
        ]);
    }
}
