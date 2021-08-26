<?php

namespace App\Repository;

use App\Entity\Projects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\QueryBuilder as ORMQueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Projects|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projects|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projects[]    findAll()
 * @method Projects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projects::class);
    }



    /**
     * @return Project[]
     */
    public function findAllActiveProjects () : array
        {
            return $this->findVisibleQuery()
            ->orderBy('p_a.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;

    }
 /**
     * @return Project[]
     */
    /**
     * 
     * 
     */

    public function findLatestProjects() :array
    {
        return $this->findVisibleQuery()
            ->setMaxResults(4)
            ->orderBy('p_a.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;

    }


    private function findVisibleQuery() :ORMQueryBuilder
     {
        return $this->createQueryBuilder('p_a')
            ->Where('p_a.ending_date is NULL');
    }


    // /**
    //  * @return Projects[] Returns an array of Projects objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Projects
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
