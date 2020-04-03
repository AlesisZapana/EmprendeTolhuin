<?php

namespace App\Repository;

use App\Entity\Rubro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Rubro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rubro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rubro[]    findAll()
 * @method Rubro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RubroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rubro::class);
    }

    // /**
    //  * @return Rubro[] Returns an array of Rubro objects
    //  */
    
    public function findRubrosDistintos()
    {
        return $this->createQueryBuilder('rubro')
            ->select('rubro.tipo')
            // ->andWhere('rubro.exampleField = :val')
            // ->setParameter('val', $value)
            // ->orderBy('rubro.id', 'ASC')
            // ->setMaxResults(10)
            ->addGroupBy('rubro.tipo')
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Rubro
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
