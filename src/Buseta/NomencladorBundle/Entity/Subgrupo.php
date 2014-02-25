<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subgrupo
 *
 * @ORM\Table(name="n_subgrupo")
 * @ORM\Entity
 */
class Subgrupo
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
     * @ORM\Column(name="descripcion", type="string", length=32)
     */
    private $descripcion;

    /**
     * @ORM\ManyToMany(targetEntity="Buseta\NomencladorBundle\Entity\Grupo", mappedBy="subgrupos")
     */
    private $grupos;
    

    function __construct()
    {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();        
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Subgrupo
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
     * Add grupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Grupo $grupos
     * @return Subgrupo
     */
    public function addGrupo(\Buseta\NomencladorBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;
    
        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Grupo $grupos
     */
    public function removeGrupo(\Buseta\NomencladorBundle\Entity\Grupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    function __toString()
    {
        return $this->descripcion;
    }
    
   
}