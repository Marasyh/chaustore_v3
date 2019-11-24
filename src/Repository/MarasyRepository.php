<?php

namespace App\Repository;

use App\Entity\Marasy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Marasy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Marasy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Marasy[]    findAll()
 * @method Marasy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarasyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Marasy::class);
    }

    // /**
    //  * @return Marasy[] Returns an array of Marasy objects
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
    public function findOneBySomeField($value): ?Marasy
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
