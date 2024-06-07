<?php

/**
 * @package App\Entity
 * @category Entity
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see ORM\Entity
 */
#[ORM\Entity(repositoryClass: "App\Repository\ProductRepository")]
class Product
{
    /**
     * @access private
     * @var integer
     */
    #[ORM\Id, ORM\Column(type: "integer"),ORM\GeneratedValue]
    private $id;

    /**
     * @access private
     * @var decimal
     */
    #[ORM\Column(type: "decimal")]
    private $price;

    /**
     * @access public
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @access public
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @access public
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @access public
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


}