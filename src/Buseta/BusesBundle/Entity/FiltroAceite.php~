<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FiltroAceite
 *
 * @ORM\Table(name="d_filtro_aceite")
 * @ORM\Entity
 */
class FiltroAceite
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
     * @ORM\Column(name="filtro_aceite_1", type="string", length=15)
     */
    private $filtro_aceite_1;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_aceite_2", type="string", length=15)
     */
    private $filtro_aceite_2;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro_aceite_3", type="string", length=15)
     */
    private $filtro_aceite_3;

    /**
     * @ORM\OneToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="filtro_aceite")
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
     * @param string $filtro_aceite_1
     */
    public function setFiltroAceite1($filtro_aceite_1)
    {
        $this->filtro_aceite_1 = $filtro_aceite_1;
    }

    /**
     * @return string
     */
    public function getFiltroAceite1()
    {
        return $this->filtro_aceite_1;
    }

    /**
     * @param string $filtro_aceite_2
     */
    public function setFiltroAceite2($filtro_aceite_2)
    {
        $this->filtro_aceite_2 = $filtro_aceite_2;
    }

    /**
     * @return string
     */
    public function getFiltroAceite2()
    {
        return $this->filtro_aceite_2;
    }

    /**
     * @param string $filtro_aceite_3
     */
    public function setFiltroAceite3($filtro_aceite_3)
    {
        $this->filtro_aceite_3 = $filtro_aceite_3;
    }

    /**
     * @return string
     */
    public function getFiltroAceite3()
    {
        return $this->filtro_aceite_3;
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
        return $this->filtro_aceite_1 && $this->filtro_aceite_2 && $this->filtro_aceite_3;
    }

}