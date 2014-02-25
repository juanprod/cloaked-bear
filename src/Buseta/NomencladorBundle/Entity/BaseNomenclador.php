<?php
namespace Buseta\NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


abstract class BaseNomenclador
{
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=32)
     */
    protected $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=32)
     */
    protected $valor;

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Color
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Color
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    function __toString()
    {
        return (string) $this->valor;
    }


} 