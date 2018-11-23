<?php

namespace App\Repository;

use App\Entity\Zamestnanec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Zamestnanec|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zamestnanec|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zamestnanec[]    findAll()
 * @method Zamestnanec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZamestnanecRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Zamestnanec::class);
    }

    // /**
    //  * @return Zamestnanec[] Returns an array of Zamestnanec objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Zamestnanec
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
