<?php

namespace App\Repository;

use App\Entity\KadrKat2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method KadrKat2|null find($id, $lockMode = null, $lockVersion = null)
 * @method KadrKat2|null findOneBy(array $criteria, array $orderBy = null)
 * @method KadrKat2[]    findAll()
 * @method KadrKat2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KadrKat2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KadrKat2::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(KadrKat2 $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(KadrKat2 $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return KadrKat2[] Returns an array of KadrKat2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KadrKat2
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
