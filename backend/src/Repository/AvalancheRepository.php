<?php

namespace App\Repository;

use App\Entity\Avalanche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avalanche>
 *
 * @method Avalanche|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avalanche|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avalanche[]    findAll()
 * @method Avalanche[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvalancheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avalanche::class);
    }

//    /**
//     * @return Avalanche[] Returns an array of Avalanche objects
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

//    public function findOneBySomeField($value): ?Avalanche
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
