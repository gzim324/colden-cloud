<?php

namespace App\Repository;

use App\Entity\File;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method File|null find($id, $lockMode = null, $lockVersion = null)
 * @method File|null findOneBy(array $criteria, array $orderBy = null)
 * @method File[]    findAll()
 * @method File[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FileRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, File::class);
    }

    public function fileVisibility()
    {
        return $this->createQueryBuilder('file')
            ->where('file.visibility = :status')
            ->setParameter('status', true)
            ->orderBy('file.id', "DESC")
            ->getQuery()
            ->getResult()
            ;
    }

    public function allFile()
    {
        return $this->createQueryBuilder('file')
            ->orderBy('file.id', "DESC")
            ->getQuery()
            ->getResult()
            ;
    }
}
