<?php

namespace Buseta\TallerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Impuesto
 *
 * @ORM\Table(name="d_impuesto")
 * @ORM\Entity(repositoryClass="Buseta\TallerBundle\Entity\ImpuestoRepository")
 */
class Impuesto
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
     * @ORM\Column(name="numero", type="string", nullable=false)
     */
    private $numero;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\TallerBundle\Entity\Linea", mappedBy="impuesto", cascade={"all"})
     */
    private $lineas;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", nullable=false)
     */
    private $tipo;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifa", type="decimal", scale=2)
     */
    private $tarifa;



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
     * @return Impuesto
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
     * @return Impuesto
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
     * Set tarifa
     *
     * @param float $tarifa
     * @return Impuesto
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    
        return $this;
    }

    /**
     * Get tarifa
     *
     * @return float 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Add lineas
     *
     * @param \Buseta\TallerBundle\Entity\Linea $lineas
     * @return Impuesto
     */
    public function addLinea(\Buseta\TallerBundle\Entity\Linea $lineas)
    {
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

    public function __toString()
    {
        return $this->nombre;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Impuesto
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


}