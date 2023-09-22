<?php

namespace App\Repository;

use App\Entity\Cronos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cronos>
 *
 * @method Cronos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cronos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cronos[]    findAll()
 * @method Cronos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CronosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cronos::class);
    }

//    /**
//     * @return Cronos[] Returns an array of Cronos objects
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

//    public function findOneBySomeField($value): ?Cronos
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
