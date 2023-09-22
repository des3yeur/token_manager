<?php

namespace App\Repository;

use App\Entity\Ethereum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ethereum>
 *
 * @method Ethereum|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ethereum|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ethereum[]    findAll()
 * @method Ethereum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EthereumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ethereum::class);
    }

//    /**
//     * @return Ethereum[] Returns an array of Ethereum objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ethereum
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
