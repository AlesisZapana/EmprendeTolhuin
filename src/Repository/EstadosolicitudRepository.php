<?php

namespace App\Repository;

use App\Entity\Estadosolicitud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Estadosolicitud|null find($id, $lockMode = null, $lockVersion = null)
 * @method Estadosolicitud|null findOneBy(array $criteria, array $orderBy = null)
 * @method Estadosolicitud[]    findAll()
 * @method Estadosolicitud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstadosolicitudRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Estadosolicitud::class);
    }

    // /**
    //  * @return Estadosolicitud[] Returns an array of Estadosolicitud objects
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

    /*
    public function findOneBySomeField($value): ?Estadosolicitud
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
