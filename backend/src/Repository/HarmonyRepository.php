<?php

namespace App\Repository;

use App\Entity\Harmony;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Harmony>
 *
 * @method Harmony|null find($id, $lockMode = null, $lockVersion = null)
 * @method Harmony|null findOneBy(array $criteria, array $orderBy = null)
 * @method Harmony[]    findAll()
 * @method Harmony[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HarmonyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Harmony::class);
    }

//    /**
//     * @return Harmony[] Returns an array of Harmony objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Harmony
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
