<?php

namespace App\Repository;

use App\Entity\InfosActualites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InfosActualites|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfosActualites|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfosActualites[]    findAll()
 * @method InfosActualites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfosActualitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfosActualites::class);
    }

    // /**
    //  * @return InfosActualites[] Returns an array of InfosActualites objects
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
    public function findOneBySomeField($value): ?InfosActualites
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
