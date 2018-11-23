<?php

namespace App\Repository;

use App\Entity\MesacnyZaznam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MesacnyZaznam|null find($id, $lockMode = null, $lockVersion = null)
 * @method MesacnyZaznam|null findOneBy(array $criteria, array $orderBy = null)
 * @method MesacnyZaznam[]    findAll()
 * @method MesacnyZaznam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesacnyZaznamRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MesacnyZaznam::class);
    }

    // /**
    //  * @return MesacnyZaznam[] Returns an array of MesacnyZaznam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MesacnyZaznam
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
