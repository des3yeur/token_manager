<?php

namespace App\Repository;

use App\Entity\BlockchainSolidity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BlockchainSolidity>
 *
 * @method BlockchainSolidity|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlockchainSolidity|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlockchainSolidity[]    findAll()
 * @method BlockchainSolidity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockchainSolidityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlockchainSolidity::class);
    }

//    /**
//     * @return BlockchainSolidity[] Returns an array of BlockchainSolidity objects
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

//    public function findOneBySomeField($value): ?BlockchainSolidity
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
