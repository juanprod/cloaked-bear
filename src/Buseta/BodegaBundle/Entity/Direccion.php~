<?php

namespace Buseta\BodegaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="n_direccion")
 * @ORM\Entity
 */
class Direccion
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
     * @ORM\OneToMany(targetEntity="Buseta\BodegaBundle\Entity\Tercero", mappedBy="direccion", cascade={"all"})
     */
    private $terceros;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string")
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="entre_calles", type="string")
     */
    private $entre_calles;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string")
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="subdivision", type="string")
     */
    private $subdivision;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string")
     */
    private $ciudad;

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
     * @param string $calle
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    }

    /**
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param string $entre_calles
     */
    public function setEntreCalles($entre_calles)
    {
        $this->entre_calles = $entre_calles;
    }

    /**
     * @return string
     */
    public function getEntreCalles()
    {
        return $this->entre_calles;
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
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param string $subdivision
     */
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;
    }

    /**
     * @return string
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $terceros
     */
    public function setTerceros($terceros)
    {
        $this->terceros = $terceros;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTerceros()
    {
        return $this->terceros;
    }

    public function __toString()
    {
        return $this->calle.', '.$this->numero.'. '.$this->entre_calles.'. '.$this->pais.'. '.$this->subdivision.', '.$this->ciudad.'.';
    }




}