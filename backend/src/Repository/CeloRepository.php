<?php

namespace App\Repository;

use App\Entity\Celo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Celo>
 *
 * @method Celo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Celo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Celo[]    findAll()
 * @method Celo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CeloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Celo::class);
    }

//    /**
//     * @return Celo[] Returns an array of Celo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Celo
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
