<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function messageVisibility()
    {
        return $this->createQueryBuilder('message')
            ->where('message.visibility = :status')
            ->setParameter('status', true)
            ->orderBy('message.id', "DESC")
            ->getQuery()
            ->getResult()
            ;
    }

    public function allMessage()
    {
        return $this->createQueryBuilder('message')
            ->orderBy('message.id', "DESC")
            ->getQuery()
            ->getResult()
            ;
    }
}
