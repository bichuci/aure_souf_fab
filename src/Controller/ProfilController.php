<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\User;
use App\Form\UpdatepasswordType;
use App\Form\UserbgimageType;
use App\Form\UserpfimageType;
use App\Form\UsersettingsType;
use App\Services\setimage;
use App\Services\UploadFileManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Security\Core\User\UserInterface;


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


    public function settings($id, Request $request, UploadFileManager $manager, UserPasswordEncoderInterface $passwordEncoder, UserPasswordEncoderInterface $encoder): Response
    {
        $profil = $this->getDoctrine()->getRepository(User::class);
        $profil = $profil->profilsettings($id);



        $path = "";
        $form = $this->createForm(UsersettingsType::class);
        $formimg = $this->createForm(UserpfimageType::class);
        $formimg2 = $this->createForm(UserpfimageType::class);
        $formdp = $this->createForm(UpdatepasswordType::class);

        $formimg->handleRequest($request);
        $formimg2->handleRequest($request);
        $form->handleRequest($request);
        $formdp->handleRequest($request);


        if(($formimg->isSubmitted() && $formimg->isValid()) || ($formimg2->isSubmitted() && $formimg2->isValid()) ){
            if($formimg->isSubmitted() && $formimg->isValid()){
                $data = $formimg->get("profil_image")->getData();
            }else{
                $data = $formimg2->get("profil_image")->getData();
            }
            $path = $manager->uploadFile($data);;
            $path = strval($path->getPath() . "\\" . $path->getFilename());
            $update = $this->getDoctrine()->getRepository(User::class);
            $update = $update->UpdateProfilimage($id, $path);
            $this->addFlash('success', 'Image ajouter');
        }

        if ($formdp->isSubmitted() && $formdp->isValid()) {
            if ($request->get('old_password')) {
                $old_password = $request->get('old_password');
                $user = $this->getUser();
                $checkPass = $passwordEncoder->isPasswordValid($user, $old_password);

                if ($checkPass === true) {
                    $new_password = $encoder->encodePassword($user, $formdp->get('password')->getData());
                    $user->setPassword($new_password);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();

                } else {
                    $this->addFlash('faild', 'mauvais mot de passe ! ');
                }
            }else{
                $this->addFlash('faild', 'Un probléme est servenu ! ');
            }
        }

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $tabinfo = ['nom','prenom','email','username','date_naissance','telephone','bio'];
            $tabinfo = array_flip($tabinfo);
            $tabadresse = ['cp', 'ville', 'rue','pays'];
            $tabadresse = array_flip($tabadresse);
            $keysinfo= array_keys($tabinfo);
            $keyadresse = array_keys($tabadresse);


            for( $i = 0; $i<count($tabinfo);$i++){
                    $tabinfo[$keysinfo[$i]] = $form[$keysinfo[$i]]->getData();
            }

            $idAdresse = $this->getUser()->getAdresseId() ?? null;
            $Adresse = ($form['adresse_id']->getData()) ?? null;
            if($idAdresse === null )
            {

            }
            else
            {
                $tabadresse['cp'] = $Adresse->getCp() ?? null;
                $tabadresse['ville'] = $Adresse->getVille() ?? null;
                $tabadresse['rue'] = $Adresse->getRue() ?? null;
                $tabadresse['pays'] = $Adresse->getPays() ?? null;
                $idAdresse = $this->getUser()->getAdresseId()->getId() ?? null;
                $updateAdresse = $this->getDoctrine()->getRepository(Adresse::class);
                $updateAdresse = $updateAdresse->UpdateProfilAdresse($tabadresse, $idAdresse);
            }



            $updateProfil = $this->getDoctrine()->getRepository(User::class);
            $updateProfil = $updateProfil->UpdateProfilInfo($tabinfo, $id);


            $this->addFlash('success', 'Modification complete complete');

            return $this->redirectToRoute('profil_settings', ['id' => $id]);
        }


            return $this->render('profil/settings.html.twig', [
                'form' => $form->createView(),
                'profil' => $profil,
                'formimg' => $formimg->createView(),
                'formimg2' => $formimg2->createView(),
                'formdp' => $formdp->createView(),
            ]);

    }

}
