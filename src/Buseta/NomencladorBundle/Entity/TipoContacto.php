<?php

namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoContacto
 *
 * @ORM\Table(name="n_tipocontacto")
 * @ORM\Entity
 */
class TipoContacto extends BaseNomenclador
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
     * @ORM\OneToMany(targetEntity="Buseta\BodegaBundle\Entity\MecanismoContacto", mappedBy="tipocontacto", cascade={"all"})
     */
    private $mecanismocontacto;

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
     * @param \Doctrine\Common\Collections\ArrayCollection $mecanismocontacto
     */
    public function setMecanismocontacto($mecanismocontacto)
    {
        $this->mecanismocontacto = $mecanismocontacto;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMecanismocontacto()
    {
        return $this->mecanismocontacto;
    }




}