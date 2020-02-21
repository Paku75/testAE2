<?php

namespace App\Repository;

use App\Entity\Typeoffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Typeoffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typeoffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typeoffre[]    findAll()
 * @method Typeoffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeoffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typeoffre::class);
    }

    // /**
    //  * @return Typeoffre[] Returns an array of Typeoffre objects
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
    public function findOneBySomeField($value): ?Typeoffre
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
