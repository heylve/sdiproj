<?php

namespace App\Repository;

use App\Entity\EnvironnementUrl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EnvironnementUrl|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnvironnementUrl|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnvironnementUrl[]    findAll()
 * @method EnvironnementUrl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnvironnementUrlRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnvironnementUrl::class);
    }

    // /**
    //  * @return EnvironnementUrl[] Returns an array of EnvironnementUrl objects
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
    public function findOneBySomeField($value): ?EnvironnementUrl
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
