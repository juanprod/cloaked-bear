<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="n_grupo")
 * @ORM\Entity
 */
class Grupo
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
     * @ORM\ManyToMany(targetEntity="Buseta\DataBundle\Entity\Autobus", mappedBy="grupos")
     */
    private $autobuses;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Buseta\NomencladorBundle\Entity\Subgrupo", inversedBy="grupos")
     * @ORM\JoinTable(name="d_subgrupos_grupos")
     */
    private $subgrupos;

    function __construct()
    {
        $this->autobuses = new \Doctrine\Common\Collections\ArrayCollection(); 
        $this->subgrupos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     * @return Grupo
     */
    public function addAutobus(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses[] = $autobuses;
    
        return $this;
    }

    /**
     * Remove autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     */
    public function removeAutobus(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses->removeElement($autobuses);
    }

    /**
     * Get autobuses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAutobuses()
    {
        return $this->autobuses;
    }
    
    /**
     * Add subgrupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Subgrupo $subgrupos
     * @return Grupo
     */
    public function addSubgrupo(\Buseta\DataBundle\Entity\Subgrupo $subgrupos)
    {
        $this->subgrupos[] = $subgrupos;
    
        return $this;
    }

    /**
     * Remove subgrupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Subgrupo $subgrupos
     */
    public function removeSubgrupo(\Buseta\NomencladorBundle\Entity\Subgrupo $subgrupos)
    {
        $this->subgrupos->removeElement($subgrupos);
    }

    /**
     * Get subgrupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubgrupos()
    {
        return $this->subgrupos;
    }

    function __toString()
    {
        return $this->descripcion;
    }
    
   

    /**
     * Add autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     * @return Grupo
     */
    public function addAutobuse(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses[] = $autobuses;
    
        return $this;
    }

    /**
     * Remove autobuses
     *
     * @param \Buseta\DataBundle\Entity\Autobus $autobuses
     */
    public function removeAutobuse(\Buseta\DataBundle\Entity\Autobus $autobuses)
    {
        $this->autobuses->removeElement($autobuses);
    }
}