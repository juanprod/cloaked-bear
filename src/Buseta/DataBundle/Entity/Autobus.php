<?php

namespace Buseta\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autobus
 *
 * @ORM\Table(name="d_autobus")
 * @ORM\Entity
 */
class Autobus
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
     * @ORM\Column(name="matricula", type="string", length=32)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_chasis", type="string", length=32)
     */
    private $numero_chasis;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_motor", type="string", length=32)
     */
    private $numero_motor;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Marca", inversedBy="autobuses")
     */
    private $marca;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Modelo", inversedBy="autobuses")
     */
    private $modelo;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Estilo", inversedBy="autobuses")
     */
    private $estilo;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="Buseta\NomencladorBundle\Entity\Grupo", inversedBy="autobuses")
     * @ORM\JoinTable(name="d_grupos_autobuses")
     */
    private $grupos;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_tara", type="integer")
     */
    private $peso_tara;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_bruto", type="integer")
     */
    private $peso_bruto;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Color", inversedBy="autobuses")
     */
    private $color;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_plazas", type="integer")
     */
    private $numero_plazas;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\MarcaMotor", inversedBy="autobuses")
     */
    private $marca_motor;

    /**
     * @ORM\ManyToOne(targetEntity="Buseta\NomencladorBundle\Entity\Combustible", inversedBy="autobuses")
     */
    private $combustible;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_cilindros", type="integer")
     */
    private $numero_cilindros;

    /**
     * @var integer
     *
     * @ORM\Column(name="cilindrada", type="integer")
     */
    private $cilindrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="potencia", type="integer")
     */
    private $potencia;

    /**
     * @var date
     *
     * @ORM\Column(name="valido_hasta", type="date")
     */
    private $valido_hasta;

    /**
     * @var date
     *
     * @ORM\Column(name="fecha_rtv", type="date")
     */
    private $fecha_rtv;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }      

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    

    
    /**
     * Set marca
     *
     * @param \Buseta\NomencladorBundle\Entity\Marca $marca
     * @return Autobus
     */
    public function setMarca(\Buseta\NomencladorBundle\Entity\Marca $marca = null)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return \Buseta\NomencladorBundle\Entity\Marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }
    
    /**
     * Add grupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Grupo $grupos
     * @return Autobus
     */
    public function addGrupo(\Buseta\DataBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;
    
        return $this;
    }

    /**
     * Remove grupos
     *
     * @param \Buseta\NomencladorBundle\Entity\Grupo $grupos
     */
    public function removeGrupo(\Buseta\NomencladorBundle\Entity\Grupo $grupos)
    {
        $this->grupos->removeElement($grupos);
    }

    /**
     * Get grupos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Autobus
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    
        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set numero_chasis
     *
     * @param string $numeroChasis
     * @return Autobus
     */
    public function setNumeroChasis($numeroChasis)
    {
        $this->numero_chasis = $numeroChasis;
    
        return $this;
    }

    /**
     * Get numero_chasis
     *
     * @return string 
     */
    public function getNumeroChasis()
    {
        return $this->numero_chasis;
    }

    /**
     * Set numero_motor
     *
     * @param string $numeroMotor
     * @return Autobus
     */
    public function setNumeroMotor($numeroMotor)
    {
        $this->numero_motor = $numeroMotor;
    
        return $this;
    }

    /**
     * Get numero_motor
     *
     * @return string 
     */
    public function getNumeroMotor()
    {
        return $this->numero_motor;
    }

    /**
     * Set peso_tara
     *
     * @param integer $pesoTara
     * @return Autobus
     */
    public function setPesoTara($pesoTara)
    {
        $this->peso_tara = $pesoTara;
    
        return $this;
    }

    /**
     * Get peso_tara
     *
     * @return integer 
     */
    public function getPesoTara()
    {
        return $this->peso_tara;
    }

    /**
     * Set peso_bruto
     *
     * @param integer $pesoBruto
     * @return Autobus
     */
    public function setPesoBruto($pesoBruto)
    {
        $this->peso_bruto = $pesoBruto;
    
        return $this;
    }

    /**
     * Get peso_bruto
     *
     * @return integer 
     */
    public function getPesoBruto()
    {
        return $this->peso_bruto;
    }

    /**
     * Set numero_plazas
     *
     * @param integer $numeroPlazas
     * @return Autobus
     */
    public function setNumeroPlazas($numeroPlazas)
    {
        $this->numero_plazas = $numeroPlazas;
    
        return $this;
    }

    /**
     * Get numero_plazas
     *
     * @return integer 
     */
    public function getNumeroPlazas()
    {
        return $this->numero_plazas;
    }

    /**
     * Set numero_cilindros
     *
     * @param integer $numeroCilindros
     * @return Autobus
     */
    public function setNumeroCilindros($numeroCilindros)
    {
        $this->numero_cilindros = $numeroCilindros;
    
        return $this;
    }

    /**
     * Get numero_cilindros
     *
     * @return integer 
     */
    public function getNumeroCilindros()
    {
        return $this->numero_cilindros;
    }

    /**
     * Set cilindrada
     *
     * @param integer $cilindrada
     * @return Autobus
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    
        return $this;
    }

    /**
     * Get cilindrada
     *
     * @return integer 
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Set potencia
     *
     * @param integer $potencia
     * @return Autobus
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    
        return $this;
    }

    /**
     * Get potencia
     *
     * @return integer 
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Set valido_hasta
     *
     * @param \DateTime $validoHasta
     * @return Autobus
     */
    public function setValidoHasta($validoHasta)
    {
        $this->valido_hasta = $validoHasta;
    
        return $this;
    }

    /**
     * Get valido_hasta
     *
     * @return \DateTime 
     */
    public function getValidoHasta()
    {
        return $this->valido_hasta;
    }

    /**
     * Set fecha_rtv
     *
     * @param \DateTime $fechaRtv
     * @return Autobus
     */
    public function setFechaRtv($fechaRtv)
    {
        $this->fecha_rtv = $fechaRtv;
    
        return $this;
    }

    /**
     * Get fecha_rtv
     *
     * @return \DateTime 
     */
    public function getFechaRtv()
    {
        return $this->fecha_rtv;
    }

    /**
     * Set modelo
     *
     * @param \Buseta\NomencladorBundle\Entity\Modelo $modelo
     * @return Autobus
     */
    public function setModelo(\Buseta\NomencladorBundle\Entity\Modelo $modelo = null)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return \Buseta\NomencladorBundle\Entity\Modelo 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set estilo
     *
     * @param \Buseta\NomencladorBundle\Entity\Estilo $estilo
     * @return Autobus
     */
    public function setEstilo(\Buseta\NomencladorBundle\Entity\Estilo $estilo = null)
    {
        $this->estilo = $estilo;
    
        return $this;
    }

    /**
     * Get estilo
     *
     * @return \Buseta\NomencladorBundle\Entity\Estilo 
     */
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set color
     *
     * @param \Buseta\NomencladorBundle\Entity\Color $color
     * @return Autobus
     */
    public function setColor(\Buseta\NomencladorBundle\Entity\Color $color = null)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return \Buseta\NomencladorBundle\Entity\Color 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set marca_motor
     *
     * @param \Buseta\NomencladorBundle\Entity\MarcaMotor $marcaMotor
     * @return Autobus
     */
    public function setMarcaMotor(\Buseta\NomencladorBundle\Entity\MarcaMotor $marcaMotor = null)
    {
        $this->marca_motor = $marcaMotor;
    
        return $this;
    }

    /**
     * Get marca_motor
     *
     * @return \Buseta\NomencladorBundle\Entity\MarcaMotor 
     */
    public function getMarcaMotor()
    {
        return $this->marca_motor;
    }

    /**
     * Set combustible
     *
     * @param \Buseta\NomencladorBundle\Entity\Combustible $combustible
     * @return Autobus
     */
    public function setCombustible(\Buseta\NomencladorBundle\Entity\Combustible $combustible = null)
    {
        $this->combustible = $combustible;
    
        return $this;
    }

    /**
     * Get combustible
     *
     * @return \Buseta\NomencladorBundle\Entity\Combustible 
     */
    public function getCombustible()
    {
        return $this->combustible;
    }
}