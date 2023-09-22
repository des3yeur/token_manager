<?php

namespace App\Repository;

use App\Entity\Metis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Metis>
 *
 * @method Metis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Metis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Metis[]    findAll()
 * @method Metis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Metis::class);
    }

//    /**
//     * @return Metis[] Returns an array of Metis objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Metis
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
