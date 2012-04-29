<?php

namespace Buseta\BodegaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Producto
 *
 * @ORM\Table(name="d_producto")
 * @ORM\Entity
 */
class Producto
{
    /*codigo, nombre, descripcion, unidad_medida, costo, precio_salida, peso, volumen*/

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
     * @ORM\Column(name="codigo", type="string")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad_medida", type="string", length=255)
     */
    private $unidad_medida;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="decimal", scale=2)
     */
    private $costo;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_salida", type="decimal", scale=2)
     */
    private $precio_salida;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="decimal", scale=2)
     */
    private $peso;

    /**
     * @var float
     *
     * @ORM\Column(name="volumen", type="decimal", scale=2)
     */
    private $volumen;

    /**
     * @param string $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param float $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @return float
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param float $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return float
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param float $precio_salida
     */
    public function setPrecioSalida($precio_salida)
    {
        $this->precio_salida = $precio_salida;
    }

    /**
     * @return float
     */
    public function getPrecioSalida()
    {
        return $this->precio_salida;
    }

    /**
     * @param string $unidad_medida
     */
    public function setUnidadMedida($unidad_medida)
    {
        $this->unidad_medida = $unidad_medida;
    }

    /**
     * @return string
     */
    public function getUnidadMedida()
    {
        return $this->unidad_medida;
    }

    /**
     * @param float $volumen
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;
    }

    /**
     * @return float
     */
    public function getVolumen()
    {
        return $this->volumen;
    }



}