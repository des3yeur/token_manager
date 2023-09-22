<?php

namespace App\Repository;

use App\Entity\PolygonZkEVM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PolygonZkEVM>
 *
 * @method PolygonZkEVM|null find($id, $lockMode = null, $lockVersion = null)
 * @method PolygonZkEVM|null findOneBy(array $criteria, array $orderBy = null)
 * @method PolygonZkEVM[]    findAll()
 * @method PolygonZkEVM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PolygonZkEVMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PolygonZkEVM::class);
    }

//    /**
//     * @return PolygonZkEVM[] Returns an array of PolygonZkEVM objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PolygonZkEVM
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
