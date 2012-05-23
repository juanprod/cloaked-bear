<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroCaja
 *
 * @ORM\Table(name="d_filtro_caja")
 * @ORM\Entity
 */
class FiltroCaja
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
     * @ORM\Column(name="filtro_caja_1", type="string", length=15)
     */
    private $filtro_caja_1;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_caja_2", type="string", length=15)
     */
    private $filtro_caja_2;

    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_caja")
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
     * @param string $filtro_caja_1
     */
    public function setFiltroCaja1($filtro_caja_1)
    {
        $this->filtro_caja_1 = $filtro_caja_1;
    }

    /**
     * @return string
     */
    public function getFiltroCaja1()
    {
        return $this->filtro_caja_1;
    }

    /**
     * @param string $filtro_caja_2
     */
    public function setFiltroCaja2($filtro_caja_2)
    {
        $this->filtro_caja_2 = $filtro_caja_2;
    }

    /**
     * @return string
     */
    public function getFiltroCaja2()
    {
        return $this->filtro_caja_2;
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
        return $this->filtro_caja_1 && $this->filtro_caja_2;
    }
}