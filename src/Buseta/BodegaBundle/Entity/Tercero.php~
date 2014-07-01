<?php

namespace Buseta\BodegaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tercero
 *
 * @ORM\Table(name="d_tercero")
 * @ORM\Entity
 */
class Tercero
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\TallerBundle\Entity\Compra", mappedBy="tercero", cascade={"all"})
     */
    private $compras;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string")
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string")
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string")
     */
    private $alias;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\BodegaBundle\Entity\Direccion", inversedBy="terceros")
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="Buseta\BodegaBundle\Entity\MecanismoContacto", mappedBy="terceros", cascade={"persist"})
     */
    private $mecanismoscontacto;

    /**
     * @ORM\Column(name="cliente", type="boolean", nullable=true)
     */
    private $cliente;

    /**
     * @ORM\Column(name="institucion", type="boolean", nullable=true)
     */
    private $institucion;

    /**
     * @ORM\Column(name="proveedor", type="boolean", nullable=true)
     */
    private $proveedor;

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
     * @param string $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
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
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
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
     * @param mixed $institucion
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;
    }

    /**
     * @return mixed
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $proveedor
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    /**
     * @return mixed
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mecanismoscontacto = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add mecanismoscontacto
     *
     * @param \Buseta\BodegaBundle\Entity\MecanismoContacto $mecanismoscontacto
     * @return Tercero
     */
    public function addMecanismoscontacto(\Buseta\BodegaBundle\Entity\MecanismoContacto $mecanismoscontacto)
    {
        $mecanismoscontacto->setTerceros($this);

        $this->mecanismoscontacto[] = $mecanismoscontacto;
    
        return $this;
    }

    /**
     * Remove mecanismoscontacto
     *
     * @param \Buseta\BodegaBundle\Entity\MecanismoContacto $mecanismoscontacto
     */
    public function removeMecanismoscontacto(\Buseta\BodegaBundle\Entity\MecanismoContacto $mecanismoscontacto)
    {
        $mecanismoscontacto->setTerceros(null);

        $this->mecanismoscontacto->removeElement($mecanismoscontacto);
    }

    /**
     * Get mecanismoscontacto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMecanismoscontacto()
    {
        return $this->mecanismoscontacto;
    }



    public function __toString()
    {
        return $this->nombres.' '.$this->apellidos;
    }
}