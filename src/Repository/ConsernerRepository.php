<?php

namespace App\Repository;

use App\Entity\Conserner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Conserner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conserner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conserner[]    findAll()
 * @method Conserner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsernerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conserner::class);
    }

    // /**
    //  * @return Conserner[] Returns an array of Conserner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Conserner
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
