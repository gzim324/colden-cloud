<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 *
 * @ORM\AttributeOverrides({
 *     @ORM\AttributeOverride(name="email",
 *          column=@ORM\Column(
 *              nullable = true
 *          )
 *      ),
 *     @ORM\AttributeOverride(name="emailCanonical",
 *          column=@ORM\Column(
 *              name = "email_canonical",
 *              nullable = true
 *          )
 *      )
 * })
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
