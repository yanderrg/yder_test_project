<?php

/**
 * @package App\Entity
 * @category Entity
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use App\Validator\Constraints as CustomAssert;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see Entity
 */
#[Entity(repositoryClass: "App\Repository\User\UserRepository")]
class User
{
    /**
     * @access private
     * @var integer
     */
    #[ORM\Id, ORM\Column(type: "integer"),ORM\GeneratedValue]
    private $id;

    /**
     * @access private
     * @var string
     */
    #[ORM\Column(type: "string", length: 180, unique: true), NotBlank]
    private $username;

    /**
     * @access private
     * @var string
     */
    #[ORM\Column(type: "string",length: 255), NotBlank, Email, CustomAssert\NotExampleEmail]
    private $email;

    /**
     * @access public
     * @return int
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @access public
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @access public
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @access public
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}