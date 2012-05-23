<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroAgua
 *
 * @ORM\Table(name="d_filtro_agua")
 * @ORM\Entity
 */
class FiltroAgua
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
     * @ORM\Column(name="filtro_agua_1", type="string", length=15)
     */
    private $filtro_agua_1;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_agua_2", type="string", length=15)
     */
    private $filtro_agua_2;

    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_agua")
     */
    private $autobus;

    /**
     * @param mixed $autobus
     */
    public function setAutobus($autobus)
    {
        $this->autobus = $autobus;
    }

    /**
     * @return mixed
     */
    public function getAutobus()
    {
        return $this->autobus;
    }

    /**
     * @param string $filtro_agua_1
     */
    public function setFiltroAgua1($filtro_agua_1)
    {
        $this->filtro_agua_1 = $filtro_agua_1;
    }

    /**
     * @return string
     */
    public function getFiltroAgua1()
    {
        return $this->filtro_agua_1;
    }

    /**
     * @param string $filtro_agua_2
     */
    public function setFiltroAgua2($filtro_agua_2)
    {
        $this->filtro_agua_2 = $filtro_agua_2;
    }

    /**
     * @return string
     */
    public function getFiltroAgua2()
    {
        return $this->filtro_agua_2;
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
     * Comprueba si contiene datos el filtro
     *
     * @return bool
     */
    public function hasData()
    {
        return $this->filtro_agua_1 && $this->filtro_agua_2;
    }
}