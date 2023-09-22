<?php

namespace App\Repository;

use App\Entity\Aptos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Aptos>
 *
 * @method Aptos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aptos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aptos[]    findAll()
 * @method Aptos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AptosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aptos::class);
    }

//    /**
//     * @return Aptos[] Returns an array of Aptos objects
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

//    public function findOneBySomeField($value): ?Aptos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
