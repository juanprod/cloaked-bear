<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroHidraulico
 *
 * @ORM\Table(name="d_filtro_hidraulico")
 * @ORM\Entity
 */
class FiltroHidraulico
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
     * @ORM\Column(name="filtro_hidraulico_1", type="string", length=15)
     */
    private $filtro_hidraulico_1;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_hidraulico_2", type="string", length=15)
     */
    private $filtro_hidraulico_2;

    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_hidraulico")
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
     * @param string $filtro_hidraulico_1
     */
    public function setFiltroHidraulico1($filtro_hidraulico_1)
    {
        $this->filtro_hidraulico_1 = $filtro_hidraulico_1;
    }

    /**
     * @return string
     */
    public function getFiltroHidraulico1()
    {
        return $this->filtro_hidraulico_1;
    }

    /**
     * @param string $filtro_hidraulico_2
     */
    public function setFiltroHidraulico2($filtro_hidraulico_2)
    {
        $this->filtro_hidraulico_2 = $filtro_hidraulico_2;
    }

    /**
     * @return string
     */
    public function getFiltroHidraulico2()
    {
        return $this->filtro_hidraulico_2;
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
        return $this->filtro_hidraulico_1 && $this->filtro_hidraulico_2;
    }
}