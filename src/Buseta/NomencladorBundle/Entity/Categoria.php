<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="n_categoria")
 * @ORM\Entity
 */
class Categoria extends BaseNomenclador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\BodegaBundle\Entity\Producto", mappedBy="categoria", cascade={"all"})
     */
    private $productos;

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
     * @param \Doctrine\Common\Collections\ArrayCollection $productos
     */
    public function setProductos($productos)
    {
        $this->productos = $productos;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getProductos()
    {
        return $this->productos;
    }



}