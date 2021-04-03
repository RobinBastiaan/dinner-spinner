<?php

namespace App\Repository;

use App\Entity\Dinner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dinner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dinner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dinner[]    findAll()
 * @method Dinner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DinnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dinner::class);
    }

    // /**
    //  * @return Dinner[] Returns an array of Dinner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dinner
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
