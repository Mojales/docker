<?php
/**
 * Created by PhpStorm.
 * User: Fixe
 * Date: 07/12/2017
 * Time: 15:56
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Todo
 * @ORM\Table()
 * @ORM\Entity()
 * @ApiResource()
 */
class Todo
{

    /**
     * Id
     *
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $title;

}