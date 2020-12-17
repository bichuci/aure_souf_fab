<?php

namespace App\Repository;

use App\Entity\Adresse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adresse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adresse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adresse[]    findAll()
 * @method Adresse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdresseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adresse::class);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> Fabien

    public function UpdateProfilAdresse(array $adresse, $id)
    {
        return $this->createQueryBuilder('a')
            ->update()
            ->where('a.id = :id')
            ->setParameter('id', $id)
            ->set('a.cp', ':cp')
            ->set('a.ville', ':ville')
            ->set('a.rue', ':rue')
            ->set('a.pays', ':pays')
            ->setParameter('cp', $adresse['cp'])
            ->setParameter('ville', $adresse['ville'])
            ->setParameter('rue', $adresse['rue'])
            ->setParameter('pays', $adresse['pays'])
            ->getQuery()
            ->getOneOrNullResult();
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 338681029460064f605f72924903f9060ededaf8
>>>>>>> Fabien
    // /**
    //  * @return Adresse[] Returns an array of Adresse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adresse
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
