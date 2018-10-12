<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CatalogRepository")
 */
class Catalog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="text", length=40)
     */

    private $cat_name;

    public function getId()
    {
        return $this->id;
    }
    public function getcat_name()
    {
        return $this->cat_name;
    }
    public function setcat_name($cat_name)
    {
        return $this->cat_name;
    }

}
