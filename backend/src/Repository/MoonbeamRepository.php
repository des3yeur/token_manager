<?php

namespace App\Repository;

use App\Entity\Moonbeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Moonbeam>
 *
 * @method Moonbeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moonbeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moonbeam[]    findAll()
 * @method Moonbeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoonbeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moonbeam::class);
    }

//    /**
//     * @return Moonbeam[] Returns an array of Moonbeam objects
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

//    public function findOneBySomeField($value): ?Moonbeam
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
