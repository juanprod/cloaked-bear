<?php

namespace Buseta\DataBundle\Form\Model;

class Autobus
{
    private $matricula;
    private $numero_chasis;
    private $numero_motor;
    private $marca;
    private $modelo;
    private $estilo;
    private $peso_tara;
    private $peso_bruto;
    private $color;
    private $numero_plazas;
    private $marca_motor;
    private $combustible;
    private $numero_cilindros;
    private $cilindrada;
    private $potencia;
    private $valido_hasta;
    private $fecha_rtv;

    /**
     * @param mixed $cilindrada
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    /**
     * @return mixed
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $combustible
     */
    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;
    }

    /**
     * @return mixed
     */
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * @param mixed $estilo
     */
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;
    }

    /**
     * @return mixed
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * @param mixed $fecha_rtv
     */
    public function setFechaRtv($fecha_rtv)
    {
        $this->fecha_rtv = $fecha_rtv;
    }

    /**
     * @return mixed
     */
    public function getFechaRtv()
    {
        return $this->fecha_rtv;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca_motor
     */
    public function setMarcaMotor($marca_motor)
    {
        $this->marca_motor = $marca_motor;
    }

    /**
     * @return mixed
     */
    public function getMarcaMotor()
    {
        return $this->marca_motor;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $numero_chasis
     */
    public function setNumeroChasis($numero_chasis)
    {
        $this->numero_chasis = $numero_chasis;
    }

    /**
     * @return mixed
     */
    public function getNumeroChasis()
    {
        return $this->numero_chasis;
    }

    /**
     * @param mixed $numero_cilindros
     */
    public function setNumeroCilindros($numero_cilindros)
    {
        $this->numero_cilindros = $numero_cilindros;
    }

    /**
     * @return mixed
     */
    public function getNumeroCilindros()
    {
        return $this->numero_cilindros;
    }

    /**
     * @param mixed $numero_motor
     */
    public function setNumeroMotor($numero_motor)
    {
        $this->numero_motor = $numero_motor;
    }

    /**
     * @return mixed
     */
    public function getNumeroMotor()
    {
        return $this->numero_motor;
    }

    /**
     * @param mixed $numero_plazas
     */
    public function setNumeroPlazas($numero_plazas)
    {
        $this->numero_plazas = $numero_plazas;
    }

    /**
     * @return mixed
     */
    public function getNumeroPlazas()
    {
        return $this->numero_plazas;
    }

    /**
     * @param mixed $peso_bruto
     */
    public function setPesoBruto($peso_bruto)
    {
        $this->peso_bruto = $peso_bruto;
    }

    /**
     * @return mixed
     */
    public function getPesoBruto()
    {
        return $this->peso_bruto;
    }

    /**
     * @param mixed $peso_tara
     */
    public function setPesoTara($peso_tara)
    {
        $this->peso_tara = $peso_tara;
    }

    /**
     * @return mixed
     */
    public function getPesoTara()
    {
        return $this->peso_tara;
    }

    /**
     * @param mixed $potencia
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }

    /**
     * @return mixed
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param mixed $valido_hasta
     */
    public function setValidoHasta($valido_hasta)
    {
        $this->valido_hasta = $valido_hasta;
    }

    /**
     * @return mixed
     */
    public function getValidoHasta()
    {
        return $this->valido_hasta;
    }


} 