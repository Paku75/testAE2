<?php

namespace App\Repository;

use App\Entity\Typeuser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Typeuser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typeuser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typeuser[]    findAll()
 * @method Typeuser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeuserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typeuser::class);
    }

    // /**
    //  * @return Typeuser[] Returns an array of Typeuser objects
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
    public function findOneBySomeField($value): ?Typeuser
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
