<?php

namespace App\Repository;

use App\Entity\Filler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Filler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Filler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Filler[]    findAll()
 * @method Filler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FillerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Filler::class);
    }

    // /**
    //  * @return Filler[] Returns an array of Filler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Filler
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
