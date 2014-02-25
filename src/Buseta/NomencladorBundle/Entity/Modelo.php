<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelo
 *
 * @ORM\Table(name="n_modelo")
 * @ORM\Entity
 */
class Modelo extends BaseNomenclador
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
     * @var \Buseta\NomencladorBundle\Entity\Marca
     *
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Marca", inversedBy="modelos")
     */
    private $marca;

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
     * Set marca
     *
     * @param \Buseta\NomencladorBundle\Entity\Marca $marca
     * @return Modelo
     */
    public function setMarca(\Buseta\NomencladorBundle\Entity\Marca $marca = null)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return \Buseta\NomencladorBundle\Entity\Marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }
}