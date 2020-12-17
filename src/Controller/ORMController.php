<?php

namespace App\Controller;

use App\Entity\Biere;
use App\Entity\Brasserie;
use App\Repository\BiereRepository;
use App\Repository\BrasserieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ORMController extends AbstractController
{
<<<<<<< HEAD
    /**
     * @Route("/orm", name="orm_index")
     */
    public function index(): Response
    {
        return $this->render('orm/index.html.twig', [

=======

    /**
     * @Route("/orm/bieres", name="orm_bieres")
     */
    public function listBieres(): Response
    {
        /** @var BiereRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Biere::class);
        $bieres = $repository->findAllJoinBrasserie();

        return $this->render('orm/listBieres.html.twig', [
            'bieres' => $bieres
>>>>>>> Fabien
        ]);
    }

    /**
<<<<<<< HEAD
     * @Route("/orm/bieres", name="orm_bieres")
     */
    public function listBieres(): Response
    {
        /** @var BiereRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Biere::class);
        $bieres = $repository->findAllJoinBrasserie();

        return $this->render('orm/listBieres.html.twig', [
            'bieres' => $bieres
=======
     * @Route("/orm/bieres/{id}", name="orm_bieres_details")
     */
    public function listBieresDetails($id): Response
    {
        /** @var BiereRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Biere::class);
        $bieres = $repository->showDetailBiere($id);

        return $this->render('orm/listBieresDetails.html.twig', [
            'bieres' => $bieres,
>>>>>>> Fabien
        ]);
    }


    /**
     * @Route("/orm/brasseries", name="orm_brasseries")
     */
    public function listBrasseries(): Response
    {
        /** @var BrasserieRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Brasserie::class);
        $brasseries = $repository->findAllBrasserie();

        return $this->render('orm/listBrasseries.html.twig', [
            'brasseries' => $brasseries
        ]);
    }

    /**
     * @Route("/orm/brasseries/detail/{id}", name="orm_detailBrasserie")
     */
    public function detailBrasseries($id): Response
    {
        /** @var BrasserieRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Brasserie::class);
        $brasserie = $repository->showDetailBrasserie($id);

        return $this->render('orm/detailBrasserie.html.twig', [
            'brasserie' => $brasserie
        ]);
    }

    /**
     * @Route("/orm/brasseries/{id}/biere", name="orm_list_brasserie_biere")
     */
    public function listBrasserieBieres($id): Response
    {
        /** @var BiereRepository $repository */
        $repository = $this->getDoctrine()->getRepository(Brasserie::class);
        $brasserie = $repository->showListBrasserieBiere($id);

        return $this->render('orm/listBrasserieBiere.html.twig', [
            'data' => $brasserie
        ]);
    }
}
