<?php

namespace App\Repository;

use App\Entity\Canto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Canto>
 *
 * @method Canto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canto[]    findAll()
 * @method Canto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CantoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canto::class);
    }

//    /**
//     * @return Canto[] Returns an array of Canto objects
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

//    public function findOneBySomeField($value): ?Canto
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
