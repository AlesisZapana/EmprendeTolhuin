<?php

namespace App\Repository;

use App\Entity\Emprendimiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Emprendimiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emprendimiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emprendimiento[]    findAll()
 * @method Emprendimiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmprendimientoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Emprendimiento::class);
    }

    // /**
    //  * @return Emprendimiento[] Returns an array of Emprendimiento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findByRubro($rubro)
    {
        return $this->createQueryBuilder('e')
                ->where('e.rubro = :unRubro')
                ->setParameter('unRubro',5)
                ->orderBy('e.razonsocial','ASC')
                ->getQuery()
                ->getResult()
                ;
    }

    /*
    public function findOneBySomeField($value): ?Emprendimiento
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
