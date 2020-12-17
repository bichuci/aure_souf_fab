<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\User;
use App\Form\Settings2Type;
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
        $UserId ="";
        $user = $this->getUser();
        if($user != null){
            $UserId = $user->getId();
        }
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
            'UserId' => $UserId,
        ]);
    }

    /**
     * @Route("/profil/{id}/settings", name="profil_settings")
     */


    public function settings($id, Request $request, UploadFileManager $manager, UserPasswordEncoderInterface $passwordEncoder, UserPasswordEncoderInterface $encoder): Response
    {

        $profil = $this->getDoctrine()->getRepository(User::class);
        $profil = $profil->profilsettings($id);

        if($this->getUser() != null)
        {
            if($this->getUser()->getId() != $id){
                return $this->redirectToRoute('home_index');
            }
        }else{
            return $this->redirectToRoute('home_index');
        }




        $path = "";
        $formset1 = $this->createForm(UsersettingsType::class);
        $formset2 = $this->createForm(Settings2Type::class);
        $formimg = $this->createForm(UserpfimageType::class);
        $formimg2 = $this->createForm(UserpfimageType::class);
        $formdp = $this->createForm(UpdatepasswordType::class);

        $formset2->handleRequest($request);
        $formimg->handleRequest($request);
        $formimg2->handleRequest($request);
        $formset1->handleRequest($request);
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

        if($formset1->isSubmitted() && $formset1->isValid()){

            $tabinfo = ['nom','prenom','email','username','date_naissance','bio'];
            $tabinfo = array_flip($tabinfo);
            $keysinfo= array_keys($tabinfo);


            for( $i = 0; $i<count($tabinfo);$i++){
                $tabinfo[$keysinfo[$i]] = $formset1[$keysinfo[$i]]->getData();
            }

            $updateProfil = $this->getDoctrine()->getRepository(User::class);
            $updateProfil = $updateProfil->UpdateProfilInfo($tabinfo, $id);


            $this->addFlash('success', 'Modification complete complete');

            return $this->redirectToRoute('profil_settings', ['id' => $id]);
        }

        if($formset2->isSubmitted() && $formset2->isValid()){


            $tabinfo = ['biere_favorite','telephone'];
            $tabinfo = array_flip($tabinfo);
            $tabadresse = ['cp', 'ville', 'rue','pays'];
            $tabadresse = array_flip($tabadresse);
            $keysinfo= array_keys($tabinfo);

            for( $i = 0; $i<count($tabinfo);$i++){
                $tabinfo[$keysinfo[$i]] = $formset2[$keysinfo[$i]]->getData();
            }

            $idAdresse = $this->getUser()->getAdresseId() ?? null;
            $AdresseForm = $formset2['adresse_id']->getData() ?? null;

            if($idAdresse === null)
            {
                $idAdresse = new Adresse();
                $idAdresse->setCp($AdresseForm->getCp());
                $idAdresse->setVille($AdresseForm->getVille());
                $idAdresse->setRue($AdresseForm->getRue());
                $idAdresse->setPays($AdresseForm->getPays());

                $envoie = $this->getDoctrine()->getManager();
                $envoie->persist($idAdresse);
                $envoie->flush();
                $idAdresse->getId();
                $user->setAdresseId($idAdresse);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

            }else{
                $tabadresse['cp'] = $AdresseForm->getCp() ?? null;
                $tabadresse['ville'] = $AdresseForm->getVille() ?? null;
                $tabadresse['rue'] = $AdresseForm->getRue() ?? null;
                $tabadresse['pays'] = $AdresseForm->getPays() ?? null;
                $idAdresse = $this->getUser()->getAdresseId()->getId() ?? null;
                $updateAdresse = $this->getDoctrine()->getRepository(Adresse::class);
                $updateAdresse = $updateAdresse->UpdateProfilAdresse($tabadresse, $idAdresse);

            }



            foreach ($tabinfo['biere_favorite'] as $biere){
                $user->addBiereFavorite($biere);
            }
            $user->setTelephone($tabinfo['telephone']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            $this->addFlash('success', 'Modification complete complete');

            return $this->redirectToRoute('profil_settings', ['id' => $id]);
        }


            return $this->render('profil/settings.html.twig', [
                'formset1' => $formset1->createView(),
                'formset2' => $formset2->createView(),
                'profil' => $profil,
                'formimg' => $formimg->createView(),
                'formimg2' => $formimg2->createView(),
                'formdp' => $formdp->createView(),
            ]);

    }

}
