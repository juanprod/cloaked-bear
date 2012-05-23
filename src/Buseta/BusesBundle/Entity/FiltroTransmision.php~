<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroTransmision
 *
 * @ORM\Table(name="d_filtro_transmision")
 * @ORM\Entity
 */
class FiltroTransmision
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
     * @ORM\Column(name="filtro_transmision", type="string", length=15)
     */
    private $filtro_transmision;


    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_transmision")
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
     * @param string $filtro_transmision
     */
    public function setFiltroTransmision($filtro_transmision)
    {
        $this->filtro_transmision = $filtro_transmision;
    }

    /**
     * @return string
     */
    public function getFiltroTransmision()
    {
        return $this->filtro_transmision;
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
        return $this->filtro_transmision;
    }
}