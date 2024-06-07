<?php

/**
 * @package App\Repository\User
 * @category Repository
 */
namespace App\Repository\User;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see ServiceEntityRepository
 */
class UserRepository extends ServiceEntityRepository
{
    /**
     * @access public
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @access public
     * @param mixed $id
     * @param mixed $lockMode
     * @param mixed $lockVersion
     * @return object|null
     * @since 1.0
     * @see ServiceEntityRepository::find()
     */
    public function find($id, $lockMode = null, $lockVersion = null): ?object
    {
        $user = parent::find($id, $lockMode, $lockVersion);

        return $user ? json_encode($user) : null;
    }

    /**
     * @access public
     * @param array $criteria
     * @param array $orderBy
     * @return object|null
     * @since 1.0
     * @see ServiceEntityRepository::findOneBy()
     */
    public function findOneBy(array $criteria, array $orderBy = null): ?object
    {
        $user = parent::findOneBy($criteria, $orderBy);

        return $user ? json_encode($user) : null;
    }

    /**
     * @access public
     * @return array
     * @since 1.0
     * @see ServiceEntityRepository::findAll()
     */
    public function findAll()
    {
        $users = parent::findAll();

        return array_map(fn($user) => json_encode($user), $users);
    }

    /**
     * @access public
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @return array
     * @since 1.0
     * @see ServiceEntityRepository::findBy()
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null): array
    {
        $users = parent::findBy($criteria, $orderBy, $limit, $offset);

        return array_map(fn($user) => json_encode($user), $users);
    }
}