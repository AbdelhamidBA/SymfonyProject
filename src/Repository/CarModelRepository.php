<?php

namespace App\Repository;

use App\Entity\CarModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CarModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarModel[]    findAll()
 * @method CarModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarModel::class);
    }

    // /**
    //  * @return CarModel[] Returns an array of CarModel objects
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

    //cette function permet de recuperer la liste de modele de voiture
    //selon la mark de voiture
    public function getCarModelsByMarkID($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.idMark = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }

    
    /*
    public function findOneBySomeField($value): ?CarModel
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
