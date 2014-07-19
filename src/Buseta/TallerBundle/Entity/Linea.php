<?php

namespace Buseta\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Linea
 *
 * @ORM\Table(name="d_linea")
 * @ORM\Entity(repositoryClass="Buseta\TallerBundle\Entity\LineaRepository")
 */
class Linea
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
     * @ORM\Column(name="numero", type="string", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", nullable=false)
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\BodegaBundle\Entity\Producto", inversedBy="lineas")
     */
    private $producto;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\TallerBundle\Entity\Impuesto", inversedBy="lineas")
     */
    private $impuesto;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\TallerBundle\Entity\Compra", inversedBy="lineas")
     */
    private $compra;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_pedido", type="integer")
     * @Assert\Type("integer")
     */
    private $cantidad_pedido;

    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="decimal", scale=2)
     */
    private $monto;

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
     * Set numero
     *
     * @param string $numero
     * @return Linea
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Linea
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cantidad_pedido
     *
     * @param integer $cantidadPedido
     * @return Linea
     */
    public function setCantidadPedido($cantidadPedido)
    {
        $this->cantidad_pedido = $cantidadPedido;
    
        return $this;
    }

    /**
     * Get cantidad_pedido
     *
     * @return integer 
     */
    public function getCantidadPedido()
    {
        return $this->cantidad_pedido;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return Linea
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set producto
     *
     * @param \Buseta\BodegaBundle\Entity\Producto $producto
     * @return Linea
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
     * Set impuesto
     *
     * @param \Buseta\TallerBundle\Entity\Impuesto $impuesto
     * @return Linea
     */
    public function setImpuesto(\Buseta\TallerBundle\Entity\Impuesto $impuesto = null)
    {
        $this->impuesto = $impuesto;
    
        return $this;
    }

    /**
     * Get impuesto
     *
     * @return \Buseta\TallerBundle\Entity\Impuesto 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set compra
     *
     * @param \Buseta\TallerBundle\Entity\Compra $compra
     * @return Linea
     */
    public function setCompra(\Buseta\TallerBundle\Entity\Compra $compra = null)
    {
        $this->compra = $compra;
    
        return $this;
    }

    /**
     * Get compra
     *
     * @return \Buseta\TallerBundle\Entity\Compra 
     */
    public function getCompra()
    {
        return $this->compra;
    }
}