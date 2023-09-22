<?php

namespace App\Repository;

use App\Entity\BSC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BSC>
 *
 * @method BSC|null find($id, $lockMode = null, $lockVersion = null)
 * @method BSC|null findOneBy(array $criteria, array $orderBy = null)
 * @method BSC[]    findAll()
 * @method BSC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BSCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BSC::class);
    }

//    /**
//     * @return BSC[] Returns an array of BSC objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BSC
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
