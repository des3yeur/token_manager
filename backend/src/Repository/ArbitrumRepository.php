<?php

namespace App\Repository;

use App\Entity\Arbitrum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Arbitrum>
 *
 * @method Arbitrum|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arbitrum|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arbitrum[]    findAll()
 * @method Arbitrum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArbitrumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Arbitrum::class);
    }

//    /**
//     * @return Arbitrum[] Returns an array of Arbitrum objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Arbitrum
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
