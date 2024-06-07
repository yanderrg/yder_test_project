<?php

/**
 * @package App\Repository\Product
 * @category Repository
 */
namespace App\Repository\Product;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see ServiceEntityRepository
 */
class ProductRepository extends ServiceEntityRepository
{
    /**
     * @access public
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @access public
     * @return array
     * @since 1.0
     * @see ServiceEntityRepository::createQueryBuilder()
     */
    public function findExpensiveProducts()
    {
        return $this->createQueryBuilder('p')
            ->where('p.price > :price')
            ->setParameter('price', 100)
            ->getQuery()
            ->getResult();
    }
}