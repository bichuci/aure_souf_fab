<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserbgimageType;
use App\Form\UsersettingsType;
use App\Services\setimage;
use App\Services\UploadFileManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Image;


class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{id}", name="profil_index")
     */

    //Dropdown menu sur icon qui donner accée au formulaire de l'upload de l'image
    public function index($id, Request $request, UploadFileManager $manager): Response
    {
        $profil = $this->getDoctrine()->getRepository(User::class);
        $profil = $profil->findOneJoinAdresse($id);

        $path = "";
        $form = $this->createForm(UserbgimageType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->get("bg_image")->getData();
            $path = $manager->uploadFile($data);;
            $path = strval($path->getPath() . "\\" . $path->getFilename());
            $update = $this->getDoctrine()->getRepository(User::class);
            $update = $update->UpdateBgimage($id, $path);
            $this->addFlash('success', 'Image ajouter');
        }

        return $this->render('profil/index.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
            'path' => $path,
        ]);
    }

    /**
     * @Route("/profil/{id}/settings", name="profil_settings")
     */


    public function settings($id, Request $request, UploadFileManager $manager): Response
    {
        $profil = $this->getDoctrine()->getRepository(User::class);
        $profil = $profil->profilsettings($id);

        $path = "";
        $form = $this->createForm(UsersettingsType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->get("bg_image")->getData();
            $path = $manager->uploadFile($data);;
            $path = strval($path->getPath() . "\\" . $path->getFilename());
            $update = $this->getDoctrine()->getRepository(User::class);
            $update = $update->UpdateBgimage($id, $path);
            $this->addFlash('success', 'Profil mis a jour ! ');
        }

            return $this->render('profil/settings.html.twig', [
                'form' => $form->createView(),
                'profil' => $profil
            ]);

    }
}
