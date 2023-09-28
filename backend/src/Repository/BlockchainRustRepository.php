<?php

namespace App\Repository;

use App\Entity\BlockchainRust;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BlockchainRust>
 *
 * @method BlockchainRust|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlockchainRust|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlockchainRust[]    findAll()
 * @method BlockchainRust[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockchainRustRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlockchainRust::class);
    }

//    /**
//     * @return BlockchainRust[] Returns an array of BlockchainRust objects
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

//    public function findOneBySomeField($value): ?BlockchainRust
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
