<?php

namespace App\Repository;

use App\Entity\InfosUrgentes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfosUrgentes|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosUrgentes|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosUrgentes[]    findAll()
 * @method InfosUrgentes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosUrgentesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosUrgentes::class);
    }

    // /**
    //  * @return InfosUrgentes[] Returns an array of InfosUrgentes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfosUrgentes
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
