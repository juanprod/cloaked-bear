<?php

namespace Buseta\BusesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ArchivoAdjunto
 *
 * @ORM\Table(name="d_archivoadjunto")
 * @ORM\Entity
 */
class ArchivoAdjunto
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
     * @ORM\ManyToOne(targetEntity="Buseta\BusesBundle\Entity\Autobus", inversedBy="archivo_adjunto")
     */
    private $autobuses;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string")
     */
    private $valor;

    /**
     * @param mixed $autobuses
     */
    public function setAutobuses($autobuses)
    {
        $this->autobuses = $autobuses;
    }

    /**
     * @return mixed
     */
    public function getAutobuses()
    {
        return $this->autobuses;
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


}