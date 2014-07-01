<?php

namespace Buseta\BodegaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Movimiento
 *
 * @ORM\Table(name="d_movimiento")
 * @ORM\Entity
 */
class Movimiento
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
     * @ORM\ManyToOne(targetEntity="Buseta\BodegaBundle\Entity\Producto", inversedBy="movimientos")
     */
    private $producto;

    /**
     * @var date
     *
     * @ORM\Column(name="fechaMovimiento", type="date")
     */
    private $fechaMovimiento;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\BodegaBundle\Entity\Bodega", inversedBy="movimientos")
     */
    private $movidoA;

    /**
     * @var string
     *
     * @ORM\Column(name="movidoBy", type="string")
     */
    private $movidoBy;

    /**
     * @var date
     *
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="createdBy", type="string")
     */
    private $createdBy;

    /**
     * @var date
     *
     * @ORM\Column(name="updated", type="date")
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="updatedBy", type="string")
     */
    private $updatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadProductos", type="integer")
     */
    private $cantidadProductos;


    function __construct()
    {
        $this->cantidadProductos = 0;
        $this->fechaMovimiento = new \DateTime();
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
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
     * Set fechaMovimiento
     *
     * @param \DateTime $fechaMovimiento
     * @return Movimiento
     */
    public function setFechaMovimiento($fechaMovimiento)
    {
        $this->fechaMovimiento = $fechaMovimiento;
    
        return $this;
    }

    /**
     * Get fechaMovimiento
     *
     * @return \DateTime 
     */
    public function getFechaMovimiento()
    {
        return $this->fechaMovimiento;
    }

    /**
     * Set movidoBy
     *
     * @param string $movidoBy
     * @return Movimiento
     */
    public function setMovidoBy($movidoBy)
    {
        $this->movidoBy = $movidoBy;
    
        return $this;
    }

    /**
     * Get movidoBy
     *
     * @return string 
     */
    public function getMovidoBy()
    {
        return $this->movidoBy;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Movimiento
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Movimiento
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Movimiento
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updatedBy
     *
     * @param string $updatedBy
     * @return Movimiento
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    
        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Movimiento
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
     * Set cantidadProductos
     *
     * @param integer $cantidadProductos
     * @return Movimiento
     */
    public function setCantidadProductos($cantidadProductos)
    {
        $this->cantidadProductos = $cantidadProductos;
    
        return $this;
    }

    /**
     * Get cantidadProductos
     *
     * @return integer 
     */
    public function getCantidadProductos()
    {
        return $this->cantidadProductos;
    }

    /**
     * Set producto
     *
     * @param \Buseta\BodegaBundle\Entity\Producto $producto
     * @return Movimiento
     */
    public function setProducto(\Buseta\BodegaBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \Buseta\BodegaBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set movidoA
     *
     * @param \Buseta\BodegaBundle\Entity\Bodega $movidoA
     * @return Movimiento
     */
    public function setMovidoA(\Buseta\BodegaBundle\Entity\Bodega $movidoA = null)
    {
        $this->movidoA = $movidoA;
    
        return $this;
    }

    /**
     * Get movidoA
     *
     * @return \Buseta\BodegaBundle\Entity\Bodega 
     */
    public function getMovidoA()
    {
        return $this->movidoA;
    }
}