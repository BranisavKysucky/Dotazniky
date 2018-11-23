<?php

namespace App\Repository;

use App\Entity\Nadriadeny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nadriadeny|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nadriadeny|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nadriadeny[]    findAll()
 * @method Nadriadeny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NadriadenyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nadriadeny::class);
    }

    // /**
    //  * @return Nadriadeny[] Returns an array of Nadriadeny objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nadriadeny
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
