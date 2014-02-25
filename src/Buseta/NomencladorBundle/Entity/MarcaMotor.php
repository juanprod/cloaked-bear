<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarcaMotor
 *
 * @ORM\Table(name="n_marca_motor")
 * @ORM\Entity
 */
class MarcaMotor
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

    /**
     * @ORM\OneToMany(targetEntity="Buseta\DataBundle\Entity\Autobus", mappedBy="marca_motor", cascade={"persist"})
     */
    private $autobuses;

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
     * @return MarcaMotor
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

    /**
     * Add autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     * @return MarcaMotor
     */
    public function addAutobuses(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses[] = $autobuses;
    
        return $this;
    }

    /**
     * Remove autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     */
    public function removeAutobuses(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses->removeElement($autobuses);
    }

    /**
     * Get autobuses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAutobuses()
    {
        return $this->autobuses;
    }

    public function __toString()
    {
        return $this->descripcion;
    }

    /**
     * Add autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     * @return MarcaMotor
     */
    public function addAutobuse(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses[] = $autobuses;
    
        return $this;
    }

    /**
     * Remove autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     */
    public function removeAutobuse(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses->removeElement($autobuses);
    }
}