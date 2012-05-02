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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    protected $valor;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Buseta\NomencladorBundle\Entity\Subgrupo", mappedBy="grupo", cascade={"all"})
     */
    private $subgrupos;

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

    /**
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    public function __toString()
    {
        return $this->valor;
    }





}