<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    public function findOneJoinAdresse($id)
    {

        return $this->createQueryBuilder('u')
            ->select(['u as user','a','n.note as note','c.commentaire as commentaire','b.nom as biere'])
            ->andWhere('u.id = :val')
            ->setParameter('val', $id)
            ->leftJoin('u.adresse_id', 'a')
            ->leftJoin('u.commentaireUsers', 'c')
            ->leftJoin('u.noteUsers', 'n')
            ->leftJoin('u.biere_favorite', 'b')
            ->getQuery()
            ->getOneOrNullResult();

    }
    public function UpdateBgimage($id,$path){

        return $this->createQueryBuilder('u')
            ->update()
            ->set('u.bg_image',':path')
            ->where('u.id = :id')
            ->setParameter('id', $id)
            ->setParameter('path', $path)
            ->getQuery()
            ->getOneOrNullResult();

    }
    public function profilsettings($id)
    {
        return $this->createQueryBuilder('u')
            ->select(['u as user','a','b as biere'])
            ->andWhere('u.id = :val')
            ->setParameter('val', $id)
            ->leftJoin('u.adresse_id', 'a')
            ->leftJoin('u.biere_favorite', 'b')
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function UpdateProfilimage($id,$path){

        return $this->createQueryBuilder('u')
            ->update()
            ->set('u.profil_image',':path')
            ->where('u.id = :id')
            ->setParameter('id', $id)
            ->setParameter('path', $path)
            ->getQuery()
            ->getOneOrNullResult();

    }

    public function UpdateProfilInfo(array $user, $id)
    {
        return $this->createQueryBuilder('u')
            ->update()
            ->where('u.id = :id')
            ->setParameter('id', $id)
            ->set('u.nom', ':nom')
            ->set('u.prenom', ':prenom')
            ->set('u.email', ':email')
            ->set('u.username', ':username')
            ->set('u.date_naissance', ':date_naissance')
            ->set('u.telephone', ':telephone')
            ->set('u.bio', ':bio')
            ->setParameter('nom', $user['nom'])
            ->setParameter('prenom', $user['prenom'])
            ->setParameter('email', $user['email'])
            ->setParameter('username', $user['username'])
            ->setParameter('date_naissance', $user['date_naissance'])
            ->setParameter('telephone', $user['telephone'])
            ->setParameter('bio', $user['bio'])
            ->getQuery()
            ->getOneOrNullResult();


    }

    public function findOneByEmail($mail)
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->andWhere('u.email = :email')
            ->setParameter('email',  $mail)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }

    public function showAdminEditUsers($id)
    {
        return $this->createQueryBuilder('u')
            ->select(['u'])
            ->andWhere('u.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
