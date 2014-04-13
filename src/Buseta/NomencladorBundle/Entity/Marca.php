<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table(name="n_marca")
 * @ORM\Entity
 */
class Marca extends BaseNomenclador
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
     * @ORM\OneToMany(targetEntity="Buseta\NomencladorBundle\Entity\Modelo", mappedBy="marca", cascade={"all"})
     */
    private $modelos;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\BusesBundle\Entity\Autobus", mappedBy="marca", cascade={"all"})
     */
    private $autobuses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modelos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add modelos
     *
     * @param \Buseta\NomencladorBundle\Entity\Modelo $modelos
     * @return Marca
     */
    public function addModelo(\Buseta\NomencladorBundle\Entity\Modelo $modelos)
    {
        $this->modelos[] = $modelos;
    
        return $this;
    }

    /**
     * Remove modelos
     *
     * @param \Buseta\NomencladorBundle\Entity\Modelo $modelos
     */
    public function removeModelo(\Buseta\NomencladorBundle\Entity\Modelo $modelos)
    {
        $this->modelos->removeElement($modelos);
    }

    /**
     * Get modelos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModelos()
    {
        return $this->modelos;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $autobuses
     */
    public function setAutobuses($autobuses)
    {
        $this->autobuses = $autobuses;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAutobuses()
    {
        return $this->autobuses;
    }


}