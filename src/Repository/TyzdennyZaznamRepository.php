<?php

namespace App\Repository;

use App\Entity\TyzdennyZaznam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TyzdennyZaznam|null find($id, $lockMode = null, $lockVersion = null)
 * @method TyzdennyZaznam|null findOneBy(array $criteria, array $orderBy = null)
 * @method TyzdennyZaznam[]    findAll()
 * @method TyzdennyZaznam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TyzdennyZaznamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TyzdennyZaznam::class);
    }

    // /**
    //  * @return TyzdennyZaznam[] Returns an array of TyzdennyZaznam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TyzdennyZaznam
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
