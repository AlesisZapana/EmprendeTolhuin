<?php

namespace App\Repository;

use App\Entity\Ambito;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ambito|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ambito|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ambito[]    findAll()
 * @method Ambito[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AmbitoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ambito::class);
    }

    // /**
    //  * @return Ambito[] Returns an array of Ambito objects
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
    public function findOneBySomeField($value): ?Ambito
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
