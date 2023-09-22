<?php

namespace App\Repository;

use App\Entity\Evmos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evmos>
 *
 * @method Evmos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evmos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evmos[]    findAll()
 * @method Evmos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvmosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evmos::class);
    }

//    /**
//     * @return Evmos[] Returns an array of Evmos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evmos
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
