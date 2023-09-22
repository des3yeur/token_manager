<?php

namespace App\Repository;

use App\Entity\Fantom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fantom>
 *
 * @method Fantom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fantom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fantom[]    findAll()
 * @method Fantom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FantomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fantom::class);
    }

//    /**
//     * @return Fantom[] Returns an array of Fantom objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fantom
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
