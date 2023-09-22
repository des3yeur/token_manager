<?php

namespace App\Repository;

use App\Entity\Zksync;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Zksync>
 *
 * @method Zksync|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zksync|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zksync[]    findAll()
 * @method Zksync[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZksyncRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zksync::class);
    }

//    /**
//     * @return Zksync[] Returns an array of Zksync objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('z.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Zksync
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
