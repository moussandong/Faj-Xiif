<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Commerce;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Commerce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commerce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commerce[]    findAll()
 * @method Commerce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommerceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commerce::class);
    }

    // /**
    //  * @return Commerce[] Returns an array of Commerce objects
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

    
    public function findOneByID($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.proprietaire = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult();
        ;
    }



    public function commerceId(): ?Commerce
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.id = :val')
            ->setParameter('val', $this->getUser())
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
}
