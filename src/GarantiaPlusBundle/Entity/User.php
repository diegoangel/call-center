<?php

namespace GarantiaPlusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CallCenter\Bundle\CommonBundle\Entity\BaseUser;

/*
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(
     *      name="id",
     *      type="integer"
     * )
     * @ORM\GeneratedValue(
     *      strategy="IDENTITY
     * )
     */
    protected $id;
}
