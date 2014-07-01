<?php

namespace Buseta\BodegaBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * InformeStockModel
 */
class InformeStockModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Buseta\BodegaBundle\Entity\Producto
     */
    private $producto;

    /**
     * @var integer
     */
    private $categoria;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fecha = new \DateTime();
    }

    /**
     * @param int $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return int
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param string $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * @param \Buseta\BodegaBundle\Entity\Producto $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    /**
     * @return \Buseta\BodegaBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }



}