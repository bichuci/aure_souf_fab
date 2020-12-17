<?php

namespace App\Repository;

use App\Entity\Brasserie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Brasserie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Brasserie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Brasserie[]    findAll()
 * @method Brasserie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrasserieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Brasserie::class);
    }


    public function findAllBrasserie()
    {
        return $this->createQueryBuilder('br')
            ->select(['br, a'])
            ->leftJoin('br.adresse', 'a')
            ->orderBy('br.id')
            ->getQuery()
            ->getResult()
            ;
    }

    public function showDetailBrasserie($id)
    {
        return $this->createQueryBuilder('br')
            ->select(['br, a'])
            ->leftJoin('br.adresse', 'a')
            ->andWhere('br.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }


    public function showListBrasserieBiere($id)
    {
        return $this->createQueryBuilder('br')
            ->select(['br as brasserie, b as bieres'])
            ->leftJoin('br.bieres', 'b')
            ->andWhere('br.id = :id' )
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }


    // /**
    //  * @return Brasserie[] Returns an array of Brasserie objects
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
    public function findOneBySomeField($value): ?Brasserie
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
