<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estilo
 *
 * @ORM\Table(name="n_estilo")
 * @ORM\Entity
 */
class Estilo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=32)
     */
    private $descripcion;

    function __construct()
    {
        $this->autobuses = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Estilo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function __toString()
    {
        return $this->descripcion;
    }

    /**
     * Add autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     * @return Estilo
     */
    public function addAutobuse(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses[] = $autobuses;
    
        return $this;
    }
}