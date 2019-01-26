<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Projet::class);
    }

//    /**
//     * @return Projet[] Returns an array of Projet objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Projet
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function listerBygroupID()
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.user_id = :val')
        ->setParameter('val', $value)
        ->orderBy('p.id', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
    ;
    }

        public function tronquer_texte($texte, $nbchar)
        {
            return (strlen($texte) > $nbchar ? substr(substr($texte,0,$nbchar),0,
            strrpos(substr($texte,0,$nbchar)," "))." (...)" : $texte);
        }
}