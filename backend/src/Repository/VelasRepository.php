<?php

namespace App\Repository;

use App\Entity\Velas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Velas>
 *
 * @method Velas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Velas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Velas[]    findAll()
 * @method Velas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VelasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Velas::class);
    }

//    /**
//     * @return Velas[] Returns an array of Velas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Velas
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
