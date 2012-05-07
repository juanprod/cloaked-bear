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
     * @ORM\Column(name="codigo", type="string", nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_costo", type="decimal", scale=2)
     */
    private $precio_costo;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_salida", type="decimal", scale=2)
     */
    private $precio_salida;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\UOM", inversedBy="productos")
     */
    private $uom;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Categoria", inversedBy="productos")
     */
    private $categoria;

    /**
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @param mixed $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    /**
     * @return mixed
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

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
     * @param float $precio_costo
     */
    public function setPrecioCosto($precio_costo)
    {
        $this->precio_costo = $precio_costo;
    }

    /**
     * @return float
     */
    public function getPrecioCosto()
    {
        return $this->precio_costo;
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
     * @param mixed $uom
     */
    public function setUom($uom)
    {
        $this->uom = $uom;
    }

    /**
     * @return mixed
     */
    public function getUom()
    {
        return $this->uom;
    }





}