<?php

namespace Buseta\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Compra
 *
 * @ORM\Table(name="d_compra")
 * @ORM\Entity(repositoryClass="Buseta\TallerBundle\Entity\CompraRepository")
 */
class Compra
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
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\TipoCompra")
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Moneda")
     */
    private $moneda;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\BodegaBundle\Entity\Tercero", inversedBy="compras")
     */
    private $tercero;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\TallerBundle\Entity\Linea", mappedBy="compra", cascade={"all"})
     */
    private $lineas;

    /**
     * @var string
     *
     * @ORM\Column(name="orden_prioridad", type="string", nullable=true)
     */
    private $orden_prioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=true)
     */
    private $descripcion;

    /**
     * @var date
     *
     * @ORM\Column(name="fecha_pedido", type="date")
     * @Assert\Date()
     */
    private $fecha_pedido;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_pago", type="string", nullable=false)
     */
    private $forma_pago;

    /**
     * @var float
     *
     * @ORM\Column(name="total_libre_impuesto", type="decimal", scale=2)
     */
    private $importe_libre_impuesto;

    /**
     * @var float
     *
     * @ORM\Column(name="total_con_impuesto", type="decimal", scale=2)
     */
    private $importe_con_impuesto;

    /**
     * @var float
     *
     * @ORM\Column(name="total_general", type="decimal", scale=2)
     */
    private $importe_general;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", nullable=false)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\TallerBundle\Entity\CondicionesPago", inversedBy="compras")
     */
    private $condiciones_pago;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set numero
     *
     * @param string $numero
     * @return Compra
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
     * Set orden_prioridad
     *
     * @param string $ordenPrioridad
     * @return Compra
     */
    public function setOrdenPrioridad($ordenPrioridad)
    {
        $this->orden_prioridad = $ordenPrioridad;
    
        return $this;
    }

    /**
     * Get orden_prioridad
     *
     * @return string 
     */
    public function getOrdenPrioridad()
    {
        return $this->orden_prioridad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Compra
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
     * Set fecha_pedido
     *
     * @param \DateTime $fechaPedido
     * @return Compra
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fecha_pedido = $fechaPedido;
    
        return $this;
    }

    /**
     * Get fecha_pedido
     *
     * @return \DateTime 
     */
    public function getFechaPedido()
    {
        return $this->fecha_pedido;
    }

    /**
     * Set forma_pago
     *
     * @param string $formaPago
     * @return Compra
     */
    public function setFormaPago($formaPago)
    {
        $this->forma_pago = $formaPago;
    
        return $this;
    }

    /**
     * Get forma_pago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->forma_pago;
    }

    /**
     * Set importe_libre_impuesto
     *
     * @param float $importeLibreImpuesto
     * @return Compra
     */
    public function setImporteLibreImpuesto($importeLibreImpuesto)
    {
        $this->importe_libre_impuesto = $importeLibreImpuesto;
    
        return $this;
    }

    /**
     * Get importe_libre_impuesto
     *
     * @return float 
     */
    public function getImporteLibreImpuesto()
    {
        return $this->importe_libre_impuesto;
    }

    /**
     * Set importe_con_impuesto
     *
     * @param float $importeConImpuesto
     * @return Compra
     */
    public function setImporteConImpuesto($importeConImpuesto)
    {
        $this->importe_con_impuesto = $importeConImpuesto;
    
        return $this;
    }

    /**
     * Get importe_con_impuesto
     *
     * @return float 
     */
    public function getImporteConImpuesto()
    {
        return $this->importe_con_impuesto;
    }

    /**
     * Set importe_general
     *
     * @param float $importeGeneral
     * @return Compra
     */
    public function setImporteGeneral($importeGeneral)
    {
        $this->importe_general = $importeGeneral;
    
        return $this;
    }

    /**
     * Get importe_general
     *
     * @return float 
     */
    public function getImporteGeneral()
    {
        return $this->importe_general;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Compra
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipo
     *
     * @param \Buseta\NomencladorBundle\Entity\TipoCompra $tipo
     * @return Compra
     */
    public function setTipo(\Buseta\NomencladorBundle\Entity\TipoCompra $tipo = null)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Buseta\NomencladorBundle\Entity\TipoCompra 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set moneda
     *
     * @param \Buseta\NomencladorBundle\Entity\Moneda $moneda
     * @return Compra
     */
    public function setMoneda(\Buseta\NomencladorBundle\Entity\Moneda $moneda = null)
    {
        $this->moneda = $moneda;
    
        return $this;
    }

    /**
     * Get moneda
     *
     * @return \Buseta\NomencladorBundle\Entity\Moneda 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set tercero
     *
     * @param \Buseta\BodegaBundle\Entity\Tercero $tercero
     * @return Compra
     */
    public function setTercero(\Buseta\BodegaBundle\Entity\Tercero $tercero = null)
    {
        $this->tercero = $tercero;
    
        return $this;
    }

    /**
     * Get tercero
     *
     * @return \Buseta\BodegaBundle\Entity\Tercero 
     */
    public function getTercero()
    {
        return $this->tercero;
    }

    /**
     * Add lineas
     *
     * @param \Buseta\TallerBundle\Entity\Linea $lineas
     * @return Compra
     */
    public function addLinea(\Buseta\TallerBundle\Entity\Linea $lineas)
    {
        $lineas->setCompra($this);

        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \Buseta\TallerBundle\Entity\Linea $lineas
     */
    public function removeLinea(\Buseta\TallerBundle\Entity\Linea $lineas)
    {
        $this->lineas->removeElement($lineas);
    }

    /**
     * Get lineas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineas()
    {
        return $this->lineas;
    }

    /**
     * Set condiciones_pago
     *
     * @param \Buseta\TallerBundle\Entity\CondicionesPago $condicionesPago
     * @return Compra
     */
    public function setCondicionesPago(\Buseta\TallerBundle\Entity\CondicionesPago $condicionesPago = null)
    {
        $this->condiciones_pago = $condicionesPago;
    
        return $this;
    }

    /**
     * Get condiciones_pago
     *
     * @return \Buseta\TallerBundle\Entity\CondicionesPago 
     */
    public function getCondicionesPago()
    {
        return $this->condiciones_pago;
    }
}