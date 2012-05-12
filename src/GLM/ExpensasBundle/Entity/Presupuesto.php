<?php
// src/Blogger/BlogBundle/Entity/Consorcio.php

namespace GLM\ExpensasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="presupuesto")
 * @ORM\HasLifecycleCallbacks()
 */
class Presupuesto
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $periodo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
    
    
    public function __toString()
    {
        return $this->getPeriodo();
    }
}