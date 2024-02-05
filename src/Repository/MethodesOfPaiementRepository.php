<?php

namespace App\Repository;

use App\Entity\MethodesOfPaiement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MethodesOfPaiement>
 *
 * @method MethodesOfPaiement|null find($id, $lockMode = null, $lockVersion = null)
 * @method MethodesOfPaiement|null findOneBy(array $criteria, array $orderBy = null)
 * @method MethodesOfPaiement[]    findAll()
 * @method MethodesOfPaiement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MethodesOfPaiementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MethodesOfPaiement::class);
    }

//    /**
//     * @return MethodesOfPaiement[] Returns an array of MethodesOfPaiement objects
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

//    public function findOneBySomeField($value): ?MethodesOfPaiement
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
