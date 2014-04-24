<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="n_grupo")
 * @ORM\Entity
 */
class Grupo extends BaseNomenclador
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\NomencladorBundle\Entity\Subgrupo", mappedBy="grupo", cascade={"all"})
     */
    private $subgrupos;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Grupo
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
     * @param \Doctrine\Common\Collections\ArrayCollection $subgrupos
     */
    public function setSubgrupos($subgrupos)
    {
        $this->subgrupos = $subgrupos;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSubgrupos()
    {
        return $this->subgrupos;
    }



}