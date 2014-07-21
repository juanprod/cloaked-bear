<?php

namespace Buseta\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CondicionesPago
 *
 * @ORM\Table(name="d_condiciones_pago")
 * @ORM\Entity(repositoryClass="Buseta\TallerBundle\Entity\CondicionesPagoRepository")
 */
class CondicionesPago
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
     * @ORM\Column(name="nombre", type="string", nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="meses_plazo", type="string", nullable=false)
     */
    private $meses_plazo;

    /**
     * @var string
     *
     * @ORM\Column(name="dias_plazo", type="string", nullable=false)
     */
    private $dias_plazo;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="string", nullable=false)
     */
    private $nota;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\TallerBundle\Entity\Compra", mappedBy="condiciones_pago", cascade={"all"})
     */
    private $compras;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compras = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return CondicionesPago
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CondicionesPago
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
     * Set meses_plazo
     *
     * @param string $mesesPlazo
     * @return CondicionesPago
     */
    public function setMesesPlazo($mesesPlazo)
    {
        $this->meses_plazo = $mesesPlazo;
    
        return $this;
    }

    /**
     * Get meses_plazo
     *
     * @return string 
     */
    public function getMesesPlazo()
    {
        return $this->meses_plazo;
    }

    /**
     * Set dias_plazo
     *
     * @param string $diasPlazo
     * @return CondicionesPago
     */
    public function setDiasPlazo($diasPlazo)
    {
        $this->dias_plazo = $diasPlazo;
    
        return $this;
    }

    /**
     * Get dias_plazo
     *
     * @return string 
     */
    public function getDiasPlazo()
    {
        return $this->dias_plazo;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return CondicionesPago
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    
        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Add compras
     *
     * @param \Buseta\TallerBundle\Entity\Compra $compras
     * @return CondicionesPago
     */
    public function addCompra(\Buseta\TallerBundle\Entity\Compra $compras)
    {
        $this->compras[] = $compras;
    
        return $this;
    }

    /**
     * Remove compras
     *
     * @param \Buseta\TallerBundle\Entity\Compra $compras
     */
    public function removeCompra(\Buseta\TallerBundle\Entity\Compra $compras)
    {
        $this->compras->removeElement($compras);
    }

    /**
     * Get compras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompras()
    {
        return $this->compras;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}