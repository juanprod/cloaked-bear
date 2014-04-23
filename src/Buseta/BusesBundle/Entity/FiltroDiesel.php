<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroDiesel
 *
 * @ORM\Table(name="d_filtro_diesel")
 * @ORM\Entity
 */
class FiltroDiesel
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
     * @ORM\Column(name="filtro_diesel_1", type="string", length=15)
     */
    private $filtro_diesel_1;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_diesel_2", type="string", length=15)
     */
    private $filtro_diesel_2;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_diesel_3", type="string", length=15)
     */
    private $filtro_diesel_3;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_diesel_4", type="string", length=15)
     */
    private $filtro_diesel_4;

    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_diesel")
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
     * @param string $filtro_diesel_1
     */
    public function setFiltroDiesel1($filtro_diesel_1)
    {
        $this->filtro_diesel_1 = $filtro_diesel_1;
    }

    /**
     * @return string
     */
    public function getFiltroDiesel1()
    {
        return $this->filtro_diesel_1;
    }

    /**
     * @param string $filtro_diesel_2
     */
    public function setFiltroDiesel2($filtro_diesel_2)
    {
        $this->filtro_diesel_2 = $filtro_diesel_2;
    }

    /**
     * @return string
     */
    public function getFiltroDiesel2()
    {
        return $this->filtro_diesel_2;
    }

    /**
     * @param string $filtro_diesel_3
     */
    public function setFiltroDiesel3($filtro_diesel_3)
    {
        $this->filtro_diesel_3 = $filtro_diesel_3;
    }

    /**
     * @return string
     */
    public function getFiltroDiesel3()
    {
        return $this->filtro_diesel_3;
    }

    /**
     * @param string $filtro_diesel_4
     */
    public function setFiltroDiesel4($filtro_diesel_4)
    {
        $this->filtro_diesel_4 = $filtro_diesel_4;
    }

    /**
     * @return string
     */
    public function getFiltroDiesel4()
    {
        return $this->filtro_diesel_4;
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
        return $this->filtro_diesel_1 && $this->filtro_diesel_2 && $this->filtro_diesel_3 && $this->filtro_diesel_4;
    }

}