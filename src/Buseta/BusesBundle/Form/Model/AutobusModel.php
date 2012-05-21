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
     * @var \Buseta\BusesBundle\Form\Model\FileModel
     */
    private $archivo_adjunto;

    /**
     * @var string
     */
    private $marca_cajacambio;

    /**
     * @var string
     */
    private $anno;

    /**
     * @var string
     */
    private $valor_unidad;

    /**
     * @var string
     */
    private $numero_unidad;

    /**
     * @var string
     */
    private $carter_capacidadlitros;

    /**
     * @var integer
     */
    private $capacidad_tanque;

    /**
     * @var string
     */
    private $tipo_cajacambio;

    /**
     * @var string
     */
    private $bateria_1;

    /**
     * @var string
     */
    private $bateria_2;

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
     * @var \Buseta\BusesBundle\Entity\FiltroAceite
     */
    private $filtro_aceite;

    /**
     * @var \Buseta\BusesBundle\Entity\FiltroDiesel
     */
    private $filtro_diesel;

    /**
     * @var \Buseta\BusesBundle\Entity\FiltroAgua
     */
    private $filtro_agua;

    /**
     * @var \Buseta\BusesBundle\Entity\FiltroHidraulico
     */
    private $filtro_hidraulico;

    /**
     * @var \Buseta\BusesBundle\Entity\FiltroTransmision
     */
    private $filtro_transmision;

    /**
     * @var \Buseta\BusesBundle\Entity\FiltroCaja
     */
    private $filtro_caja;

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
     * @var \Buseta\NomencladorBundle\Entity\AceiteCajaCambios
     */
    private $aceitecajacambios;

    /**
     * @var \Buseta\NomencladorBundle\Entity\AceiteTransmision
     */
    private $aceitetransmision;

    /**
     * @var \Buseta\NomencladorBundle\Entity\AceiteHidraulico
     */
    private $aceitehidraulico;

    /**
     * @var \Buseta\NomencladorBundle\Entity\AceiteMotor
     */
    private $aceitemotor;


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
     * @var string
     */
    private $fecha_rtv_1;

    /**
     * @var string
     */
    private $fecha_rtv_2;

    /**
     * @var date
     * @Assert\Date()
     */
    private $fecha_ingreso;

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
     * @param \Buseta\NomencladorBundle\Entity\AceiteCajaCambios $aceitecajacambios
     */
    public function setAceitecajacambios($aceitecajacambios)
    {
        $this->aceitecajacambios = $aceitecajacambios;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\AceiteCajaCambios
     */
    public function getAceitecajacambios()
    {
        return $this->aceitecajacambios;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\AceiteHidraulico $aceitehidraulico
     */
    public function setAceitehidraulico($aceitehidraulico)
    {
        $this->aceitehidraulico = $aceitehidraulico;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\AceiteHidraulico
     */
    public function getAceitehidraulico()
    {
        return $this->aceitehidraulico;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\AceiteMotor $aceitemotor
     */
    public function setAceitemotor($aceitemotor)
    {
        $this->aceitemotor = $aceitemotor;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\AceiteMotor
     */
    public function getAceitemotor()
    {
        return $this->aceitemotor;
    }

    /**
     * @param \Buseta\NomencladorBundle\Entity\AceiteTransmision $aceitetransmision
     */
    public function setAceitetransmision($aceitetransmision)
    {
        $this->aceitetransmision = $aceitetransmision;
    }

    /**
     * @return \Buseta\NomencladorBundle\Entity\AceiteTransmision
     */
    public function getAceitetransmision()
    {
        return $this->aceitetransmision;
    }

    /**
     * @param string $anno
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    /**
     * @return string
     */
    public function getAnno()
    {
        return $this->anno;
    }

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
     * @param string $bateria_1
     */
    public function setBateria1($bateria_1)
    {
        $this->bateria_1 = $bateria_1;
    }

    /**
     * @return string
     */
    public function getBateria1()
    {
        return $this->bateria_1;
    }

    /**
     * @param string $bateria_2
     */
    public function setBateria2($bateria_2)
    {
        $this->bateria_2 = $bateria_2;
    }

    /**
     * @return string
     */
    public function getBateria2()
    {
        return $this->bateria_2;
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
     * @param int $capacidad_tanque
     */
    public function setCapacidadTanque($capacidad_tanque)
    {
        $this->capacidad_tanque = $capacidad_tanque;
    }

    /**
     * @return int
     */
    public function getCapacidadTanque()
    {
        return $this->capacidad_tanque;
    }

    /**
     * @param string $carter_capacidadlitros
     */
    public function setCarterCapacidadlitros($carter_capacidadlitros)
    {
        $this->carter_capacidadlitros = $carter_capacidadlitros;
    }

    /**
     * @return string
     */
    public function getCarterCapacidadlitros()
    {
        return $this->carter_capacidadlitros;
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
     * @param \Buseta\BusesBundle\Form\Model\date $fecha_ingreso
     */
    public function setFechaIngreso($fecha_ingreso)
    {
        $this->fecha_ingreso = $fecha_ingreso;
    }

    /**
     * @return \Buseta\BusesBundle\Form\Model\date
     */
    public function getFechaIngreso()
    {
        return $this->fecha_ingreso;
    }

    /**
     * @param string $fecha_rtv_1
     */
    public function setFechaRtv1($fecha_rtv_1)
    {
        $this->fecha_rtv_1 = $fecha_rtv_1;
    }

    /**
     * @return string
     */
    public function getFechaRtv1()
    {
        return $this->fecha_rtv_1;
    }

    /**
     * @param string $fecha_rtv_2
     */
    public function setFechaRtv2($fecha_rtv_2)
    {
        $this->fecha_rtv_2 = $fecha_rtv_2;
    }

    /**
     * @return string
     */
    public function getFechaRtv2()
    {
        return $this->fecha_rtv_2;
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
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imagen_frontal
     */
    public function setImagenFrontal($imagen_frontal)
    {
        $this->imagen_frontal = $imagen_frontal;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getImagenFrontal()
    {
        return $this->imagen_frontal;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imagen_lateral_d
     */
    public function setImagenLateralD($imagen_lateral_d)
    {
        $this->imagen_lateral_d = $imagen_lateral_d;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getImagenLateralD()
    {
        return $this->imagen_lateral_d;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imagen_lateral_i
     */
    public function setImagenLateralI($imagen_lateral_i)
    {
        $this->imagen_lateral_i = $imagen_lateral_i;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getImagenLateralI()
    {
        return $this->imagen_lateral_i;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imagen_trasera
     */
    public function setImagenTrasera($imagen_trasera)
    {
        $this->imagen_trasera = $imagen_trasera;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
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
     * @param string $marca_cajacambio
     */
    public function setMarcaCajacambio($marca_cajacambio)
    {
        $this->marca_cajacambio = $marca_cajacambio;
    }

    /**
     * @return string
     */
    public function getMarcaCajacambio()
    {
        return $this->marca_cajacambio;
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
     * @param string $numero_unidad
     */
    public function setNumeroUnidad($numero_unidad)
    {
        $this->numero_unidad = $numero_unidad;
    }

    /**
     * @return string
     */
    public function getNumeroUnidad()
    {
        return $this->numero_unidad;
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
     * @param string $tipo_cajacambio
     */
    public function setTipoCajacambio($tipo_cajacambio)
    {
        $this->tipo_cajacambio = $tipo_cajacambio;
    }

    /**
     * @return string
     */
    public function getTipoCajacambio()
    {
        return $this->tipo_cajacambio;
    }

    /**
     * @param \Buseta\BusesBundle\Form\Model\date $valido_hasta
     */
    public function setValidoHasta($valido_hasta)
    {
        $this->valido_hasta = $valido_hasta;
    }

    /**
     * @return \Buseta\BusesBundle\Form\Model\date
     */
    public function getValidoHasta()
    {
        return $this->valido_hasta;
    }

    /**
     * @param string $valor_unidad
     */
    public function setValorUnidad($valor_unidad)
    {
        $this->valor_unidad = $valor_unidad;
    }

    /**
     * @return string
     */
    public function getValorUnidad()
    {
        return $this->valor_unidad;
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

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroAceite $filtro_aceite
     */
    public function setFiltroAceite($filtro_aceite)
    {
        $this->filtro_aceite = $filtro_aceite;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroAceite
     */
    public function getFiltroAceite()
    {
        return $this->filtro_aceite;
    }

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroAgua $filtro_agua
     */
    public function setFiltroAgua($filtro_agua)
    {
        $this->filtro_agua = $filtro_agua;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroAgua
     */
    public function getFiltroAgua()
    {
        return $this->filtro_agua;
    }

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroCaja $filtro_caja
     */
    public function setFiltroCaja($filtro_caja)
    {
        $this->filtro_caja = $filtro_caja;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroCaja
     */
    public function getFiltroCaja()
    {
        return $this->filtro_caja;
    }

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroDiesel $filtro_diesel
     */
    public function setFiltroDiesel($filtro_diesel)
    {
        $this->filtro_diesel = $filtro_diesel;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroDiesel
     */
    public function getFiltroDiesel()
    {
        return $this->filtro_diesel;
    }

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroHidraulico $filtro_hidraulico
     */
    public function setFiltroHidraulico($filtro_hidraulico)
    {
        $this->filtro_hidraulico = $filtro_hidraulico;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroHidraulico
     */
    public function getFiltroHidraulico()
    {
        return $this->filtro_hidraulico;
    }

    /**
     * @param \Buseta\BusesBundle\Entity\FiltroTransmision $filtro_transmision
     */
    public function setFiltroTransmision($filtro_transmision)
    {
        $this->filtro_transmision = $filtro_transmision;
    }

    /**
     * @return \Buseta\BusesBundle\Entity\FiltroTransmision
     */
    public function getFiltroTransmision()
    {
        return $this->filtro_transmision;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $archivo_adjunto
     */
    public function setArchivoAdjunto($archivo_adjunto)
    {
        $this->archivo_adjunto = $archivo_adjunto;
    }

    /**
     * Add archivo_adjunto
     *
     * @param \Buseta\BusesBundle\Entity\ArchivoAdjunto $archivoAdjunto
     * @return AutobusModel
     */
    public function addArchivoAdjunto(\Symfony\Component\HttpFoundation\File\UploadedFile $archivoAdjunto)
    {
        $this->archivo_adjunto[] = $archivoAdjunto;

        return $this;
    }

    /**
     * Remove archivo_adjunto
     *
     * @param \Buseta\BusesBundle\Entity\ArchivoAdjunto $archivoAdjunto
     */
    public function removeArchivoAdjunto(\Symfony\Component\HttpFoundation\File\UploadedFile $archivoAdjunto)
    {
        $this->archivo_adjunto->removeElement($archivoAdjunto);
    }

    /**
     * Get archivo_adjunto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArchivoAdjunto()
    {
        return $this->archivo_adjunto;
    }

}