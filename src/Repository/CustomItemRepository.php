<?php

namespace App\Repository;

use App\Entity\CustomItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomItem[]    findAll()
 * @method CustomItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomItem::class);
    }

    // /**
    //  * @return CustomItem[] Returns an array of CustomItem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomItem
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
