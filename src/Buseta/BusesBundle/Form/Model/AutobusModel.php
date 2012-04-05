<?php

namespace Buseta\BusesBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * AutobusModel
 */
class AutobusModel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @Assert\File(maxSize="6000000")
     * @var UploadedFile $file
     */
    private $imagen_frontal;

    /**
     * @Assert\File(maxSize="6000000")
     * @var UploadedFile $file
     */
    private $imagen_lateral_d;

    /**
     * @Assert\File(maxSize="6000000")
     * @var UploadedFile $file
     */
    private $imagen_lateral_i;

    /**
     * @Assert\File(maxSize="6000000")
     * @var UploadedFile $file
     */
    private $imagen_trasera;

    /**
     * @var string
     */
    private $matricula;

    /**
     * @var string
     */
    private $numero_chasis;

    /**
     * @var string
     */
    private $numero_motor;

    /**
     * @var \Buseta\NomencladorBundle\Entity\Marca
     */
    private $marca;

    /**
     * @var \Buseta\NomencladorBundle\Entity\Modelo
     */
    private $modelo;

    /**
     * @var \Buseta\NomencladorBundle\Entity\Estilo
     */
    private $estilo;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $peso_tara;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $peso_bruto;

    /**
     * @var \Buseta\NomencladorBundle\Entity\Color
     */
    private $color;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $numero_plazas;

    /**
     * @var \Buseta\NomencladorBundle\Entity\MarcaMotor
     */
    private $marca_motor;

    /**
     * @var \Buseta\NomencladorBundle\Entity\Combustible
     */
    private $combustible;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $numero_cilindros;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $cilindrada;

    /**
     * @var integer
     * @Assert\Type("integer")
     */
    private $potencia;

    /**
     * @var date
     * @Assert\Date()
     */
    private $valido_hasta;

    /**
     * @var date
     * @Assert\Date()
     */
    private $fecha_rtv;

    /**
     * @var string
     */
    private $rampas;

    /**
     * @var string
     */
    private $barras;

    /**
     * @var string
     */
    private $camaras;

    /**
     * @var string
     */
    private $lector_cedulas;

    /**
     * @var string
     */
    private $publicidad;

    /**
     * @var string
     */
    private $gps;

    /**
     * @var string
     */
    private $wifi;

    /**
     * @param string $barras
     */
    public function setBarras($barras)
    {
        $this->barras = $barras;
    }

    /**
     * @return string
     */
    public function getBarras()
    {
        return $this->barras;
    }

    /**
     * @param string $camaras
     */
    public function setCamaras($camaras)
    {
        $this->camaras = $camaras;
    }

    /**
     * @return string
     */
    public function getCamaras()
    {
        return $this->camaras;
    }

    /**
     * @param int $cilindrada
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    /**
     * @return int
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\Color $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\Combustible $combustible
     */
    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\Combustible
     */
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\Estilo $estilo
     */
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\Estilo
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * @param \Buseta\DataBundle\Form\Model\date $fecha_rtv
     */
    public function setFechaRtv($fecha_rtv)
    {
        $this->fecha_rtv = $fecha_rtv;
    }

    /**
     * @return \Buseta\DataBundle\Form\Model\date
     */
    public function getFechaRtv()
    {
        return $this->fecha_rtv;
    }

    /**
     * @param string $gps
     */
    public function setGps($gps)
    {
        $this->gps = $gps;
    }

    /**
     * @return string
     */
    public function getGps()
    {
        return $this->gps;
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
     * @param mixed $imagen_frontal
     */
    public function setImagenFrontal($imagen_frontal)
    {
        $this->imagen_frontal = $imagen_frontal;
    }

    /**
     * @return UploadedFile
     */
    public function getImagenFrontal()
    {
        return $this->imagen_frontal;
    }

    /**
     * @param mixed $imagen_lateral_d
     */
    public function setImagenLateralD($imagen_lateral_d)
    {
        $this->imagen_lateral_d = $imagen_lateral_d;
    }

    /**
     * @return UploadedFile
     */
    public function getImagenLateralD()
    {
        return $this->imagen_lateral_d;
    }

    /**
     * @param mixed $imagen_lateral_i
     */
    public function setImagenLateralI($imagen_lateral_i)
    {
        $this->imagen_lateral_i = $imagen_lateral_i;
    }

    /**
     * @return UploadedFile
     */
    public function getImagenLateralI()
    {
        return $this->imagen_lateral_i;
    }

    /**
     * @param mixed $imagen_trasera
     */
    public function setImagenTrasera($imagen_trasera)
    {
        $this->imagen_trasera = $imagen_trasera;
    }

    /**
     * @return UploadedFile
     */
    public function getImagenTrasera()
    {
        return $this->imagen_trasera;
    }

    /**
     * @param string $lector_cedulas
     */
    public function setLectorCedulas($lector_cedulas)
    {
        $this->lector_cedulas = $lector_cedulas;
    }

    /**
     * @return string
     */
    public function getLectorCedulas()
    {
        return $this->lector_cedulas;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\Marca $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\Marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\MarcaMotor $marca_motor
     */
    public function setMarcaMotor($marca_motor)
    {
        $this->marca_motor = $marca_motor;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\MarcaMotor
     */
    public function getMarcaMotor()
    {
        return $this->marca_motor;
    }

    /**
     * @param string $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\Modelo $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\Modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param string $numero_chasis
     */
    public function setNumeroChasis($numero_chasis)
    {
        $this->numero_chasis = $numero_chasis;
    }

    /**
     * @return string
     */
    public function getNumeroChasis()
    {
        return $this->numero_chasis;
    }

    /**
     * @param int $numero_cilindros
     */
    public function setNumeroCilindros($numero_cilindros)
    {
        $this->numero_cilindros = $numero_cilindros;
    }

    /**
     * @return int
     */
    public function getNumeroCilindros()
    {
        return $this->numero_cilindros;
    }

    /**
     * @param string $numero_motor
     */
    public function setNumeroMotor($numero_motor)
    {
        $this->numero_motor = $numero_motor;
    }

    /**
     * @return string
     */
    public function getNumeroMotor()
    {
        return $this->numero_motor;
    }

    /**
     * @param int $numero_plazas
     */
    public function setNumeroPlazas($numero_plazas)
    {
        $this->numero_plazas = $numero_plazas;
    }

    /**
     * @return int
     */
    public function getNumeroPlazas()
    {
        return $this->numero_plazas;
    }

    /**
     * @param int $peso_bruto
     */
    public function setPesoBruto($peso_bruto)
    {
        $this->peso_bruto = $peso_bruto;
    }

    /**
     * @return int
     */
    public function getPesoBruto()
    {
        return $this->peso_bruto;
    }

    /**
     * @param int $peso_tara
     */
    public function setPesoTara($peso_tara)
    {
        $this->peso_tara = $peso_tara;
    }

    /**
     * @return int
     */
    public function getPesoTara()
    {
        return $this->peso_tara;
    }

    /**
     * @param int $potencia
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }

    /**
     * @return int
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * @param string $publicidad
     */
    public function setPublicidad($publicidad)
    {
        $this->publicidad = $publicidad;
    }

    /**
     * @return string
     */
    public function getPublicidad()
    {
        return $this->publicidad;
    }

    /**
     * @param string $rampas
     */
    public function setRampas($rampas)
    {
        $this->rampas = $rampas;
    }

    /**
     * @return string
     */
    public function getRampas()
    {
        return $this->rampas;
    }

    /**
     * @param \Buseta\DataBundle\Form\Model\date $valido_hasta
     */
    public function setValidoHasta($valido_hasta)
    {
        $this->valido_hasta = $valido_hasta;
    }

    /**
     * @return \Buseta\DataBundle\Form\Model\date
     */
    public function getValidoHasta()
    {
        return $this->valido_hasta;
    }

    /**
     * @param string $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @return string
     */
    public function getWifi()
    {
        return $this->wifi;
    }




}