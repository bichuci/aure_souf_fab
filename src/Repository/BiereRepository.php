<?php

namespace App\Repository;

use App\Entity\Biere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Biere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Biere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Biere[]    findAll()
 * @method Biere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Biere::class);
    }

    public function findAllJoinBrasserie()
    {
        return $this->createQueryBuilder('b')
            ->select(['b', 'br', 'c', 'a'])
            ->leftJoin('b.brasserie_id', 'br')
            ->leftJoin('b.categorie_id', 'c')
            ->leftJoin('br.adresse', 'a')
            ->orderBy('b.id')
            ->getQuery()
            ->getResult()
            ;
    }

    public function showListBrasserieBiere()
    {
        return $this->createQueryBuilder('br')
            ->select(['br , b'])
            ->leftJoin('br.bieres', 'b')
            ->getQuery()
            ->getResult()
            ;
    }

    public function showDetailBiere($id)
    {
        return $this->createQueryBuilder('b')
            ->select(['b'])
            ->andWhere('b.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
    // /**
    //  * @return Biere[] Returns an array of Biere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Biere
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
