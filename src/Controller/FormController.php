<?php

namespace App\Controller;

use App\Entity\Biere;
use App\Entity\Brasserie;
use App\Form\BiereType;
use App\Form\BrasserieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(): Response
    {
        return $this->render('form/index.html.twig', [
        ]);
    }

    /**
     * @Route("/formulaire/biere", name="form_biere")
     */
    public function addBiere(Request $request): Response
    {
        $form = $this->createForm(BiereType::class, new Biere());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $biere = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($biere);
            $em->flush();

            $this->addFlash('success', 'Votre bière à bien été ajouté');

            return $this->redirectToRoute('orm_index');
        }

        return $this->render('form/form_biere.html.twig', [
            'form_biere' => $form->createView(),
        ]);
    }

    /**
     * @Route("/formulaire/brasserie", name="form_brasserie")
     */
    public function addBrasserie(Request $request): Response
    {
        $form = $this->createForm(BrasserieType::class, new Brasserie());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $brasserie = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($brasserie);
            $em->flush();

            $this->addFlash('success', 'Votre brasserie à bien été ajouté');

            return $this->redirectToRoute('orm_brasseries');
        }

        return $this->render('form/form_brasserie.html.twig', [
            'form_brasserie' => $form->createView(),
        ]);
    }
}
