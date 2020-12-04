<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\UploadFileManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Image;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{id}", name="profil_index")
     */
    public function index($id, Request $request, UploadFileManager $manager): Response
    {
        $profil = $this->getDoctrine()->getRepository(User::class);
        $profil = $profil->findOneJoinAdresse($id);

        $path ="";
        $form = $this->createFormBuilder()
            ->add('image', FileType::class,[
                "error_bubbling" => true,
                "constraints" => [
                    new Image([
                        "maxSize" => "2M",
                        "mimeTypes" => "image/*"
                    ])
                ],
                "attr" => [
                    "id" => "file-input"
                ],
                "label_attr" => [
                    "class" => "d-flex"
                ],
                "label" => '<i class="fas fa-image"></i><p class="align-self-end">Arriére plan</p>'
        ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();
            $path = $manager->uploadFile($data["image"]);
        }


        return $this->render('profil/index.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
            'path' => $path,
        ]);
    }

}
