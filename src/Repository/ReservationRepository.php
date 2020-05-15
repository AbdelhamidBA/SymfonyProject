<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    
    public function getReservationCount()
    {
        return $this->createQueryBuilder('r')
            ->select('count(r.id)')
            ->getQuery()
            ->getSingleScalarResult();
        
    }

    public function getPendingReservationByUserID($id)
    {
        return $this->createQueryBuilder('r')
        ->where('r.id_client=:userID')
        ->andWhere('r.status=:status')
        ->setParameter('userID',$id)
        ->setParameter('status','Pending')
        ->getQuery()
        ->getResult()
        ;
    }
    public function getReservationByUserID($id)
    {
        return $this->createQueryBuilder('r')
        ->where('r.id_client = :userID')
        ->setParameter('userID',$id)
        ->getQuery()
        ->getOneOrNullResult()
        ;
        
    }

    public function getActiveReservationCount()
    {
        return $this->createQueryBuilder('r')
            ->select('count(r.id)')
            ->where('r.status = :status')
            ->setParameter('status','Started')
            ->getQuery()
            ->getSingleScalarResult();
        
    }


    // /**
    //  * @return Reservation[] Returns an array of Reservation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
