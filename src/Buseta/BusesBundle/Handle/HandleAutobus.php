<?php

namespace Buseta\BusesBundle\Handle;

use Buseta\BusesBundle\Entity\Autobus;
use Buseta\BusesBundle\Form\Model\AutobusModel;
use Doctrine\ORM\EntityManager;


class HandleAutobus
{
    private $em;

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function HandleAutobusNew(AutobusModel $entityModel)
    {
        /** @var Autobus $entity */
        $entity = new Autobus();

        $fileFrontal = $entityModel->getImagenFrontal();
        $directorio = __DIR__.'/../../../../web/images/';
        $nombre = $entityModel->getMatricula()."-frontal.jpg";
        $entity->setImagenFrontal($nombre);
        $fileFrontal->move($directorio,$nombre);

        $fileLateralD = $entityModel->getImagenLateralD();
        $nombre = $entityModel->getMatricula()."-lateral_d.jpg";
        $entity->setImagenLateralD($nombre);
        $fileLateralD->move($directorio,$nombre);

        $fileLateralI = $entityModel->getImagenLateralI();
        $nombre = $entityModel->getMatricula()."-lateral_i.jpg";
        $entity->setImagenLateralI($nombre);
        $fileLateralI->move($directorio,$nombre);

        $fileTrasera = $entityModel->getImagenTrasera();
        $nombre = $entityModel->getMatricula()."-trasera.jpg";
        $entity->setImagenTrasera($nombre);
        $fileTrasera->move($directorio,$nombre);

        $entity->setMatricula($entityModel->getMatricula());
        $entity->setNumeroChasis($entityModel->getNumeroChasis());
        $entity->setNumeroMotor($entityModel->getNumeroMotor());

        $entity->setPesoBruto($entityModel->getPesoBruto());
        $entity->setPesoTara($entityModel->getPesoTara());
        $entity->setNumeroPlazas($entityModel->getNumeroPlazas());

        $entity->setNumeroCilindros($entityModel->getNumeroCilindros());
        $entity->setCilindrada($entityModel->getCilindrada());
        $entity->setPotencia($entityModel->getPotencia());

        $entity->setValidoHasta($entityModel->getValidoHasta());
        $entity->setEstilo($entityModel->getEstilo());

        $entity->setMarca($entityModel->getMarca());
        $entity->setModelo($entityModel->getModelo());
        $entity->setColor($entityModel->getColor());

        $entity->setMarcaMotor($entityModel->getMarcaMotor());
        $entity->setCombustible($entityModel->getCombustible());

        $entity->setRampas($entityModel->getRampas());
        $entity->setBarras($entityModel->getBarras());
        $entity->setCamaras($entityModel->getCamaras());

        $entity->setLectorCedulas($entityModel->getLectorCedulas());
        $entity->setPublicidad($entityModel->getPublicidad());
        $entity->setGps($entityModel->getGps());

        $entity->setWifi($entityModel->getWifi());

        $entity->setFechaIngreso($entityModel->getFechaIngreso());
        $entity->setFechaRtv1($entityModel->getFechaRtv1());
        $entity->setFechaRtv2($entityModel->getFechaRtv2());

        $entity->setMarcaCajacambio($entityModel->getMarcaCajacambio());
        $entity->setTipoCajacambio($entityModel->getTipoCajacambio());
        $entity->setNumeroUnidad($entityModel->getNumeroUnidad());
        $entity->setAnno($entityModel->getAnno());
        $entity->setValorUnidad($entityModel->getValorUnidad());
        $entity->setCapacidadTanque($entityModel->getCapacidadTanque());

        $entity->setAceitemotor($entityModel->getAceitemotor());
        $entity->setAceitehidraulico($entityModel->getAceitehidraulico());
        $entity->setAceitecajacambios($entityModel->getAceitecajacambios());

        $entity->setMarcaCajacambio($entityModel->getMarcaCajacambio());
        $entity->setTipoCajacambio($entityModel->getTipoCajacambio());

        $entity->setCartelCapacidadlitros($entityModel->getCartelCapacidadlitros());

        $entity->setFiltroAceite($entityModel->getFiltroAceite());
        $entity->setFiltroAgua($entityModel->getFiltroAgua());
        $entity->setFiltroDiesel($entityModel->getFiltroDiesel());
        $entity->setFiltroHidraulico($entityModel->getFiltroHidraulico());
        $entity->setFiltroTransmision($entityModel->getFiltroTransmision());
        $entity->setFiltroCaja($entityModel->getFiltroCaja());

        $entity->setBateria1($entityModel->getBateria1());
        $entity->setBateria2($entityModel->getBateria2());

        $this->em->persist($entity);
        $this->em->flush();

        return $entity;

    }

    public function HandleAutobusEdit(AutobusModel $entityModel, Autobus $entity)
    {
        /** @var Autobus $entity */

        $fileFrontal = $entityModel->getImagenFrontal();
        $directorio = __DIR__.'/../../../../web/images/';
        $nombre = $entityModel->getMatricula()."-frontal.jpg";
        $entity->setImagenFrontal($nombre);
        $fileFrontal->move($directorio,$nombre);

        $fileLateralD = $entityModel->getImagenLateralD();
        $nombre = $entityModel->getMatricula()."-lateral_d.jpg";
        $entity->setImagenLateralD($nombre);
        $fileLateralD->move($directorio,$nombre);

        $fileLateralI = $entityModel->getImagenLateralI();
        $nombre = $entityModel->getMatricula()."-lateral_i.jpg";
        $entity->setImagenLateralI($nombre);
        $fileLateralI->move($directorio,$nombre);

        $fileTrasera = $entityModel->getImagenTrasera();
        $nombre = $entityModel->getMatricula()."-trasera.jpg";
        $entity->setImagenTrasera($nombre);
        $fileTrasera->move($directorio,$nombre);

        $entity->setMatricula($entityModel->getMatricula());
        $entity->setNumeroChasis($entityModel->getNumeroChasis());
        $entity->setNumeroMotor($entityModel->getNumeroMotor());

        $entity->setPesoBruto($entityModel->getPesoBruto());
        $entity->setPesoTara($entityModel->getPesoTara());
        $entity->setNumeroPlazas($entityModel->getNumeroPlazas());

        $entity->setNumeroCilindros($entityModel->getNumeroCilindros());
        $entity->setCilindrada($entityModel->getCilindrada());
        $entity->setPotencia($entityModel->getPotencia());

        $entity->setValidoHasta($entityModel->getValidoHasta());
        $entity->setEstilo($entityModel->getEstilo());

        $entity->setMarca($entityModel->getMarca());
        $entity->setModelo($entityModel->getModelo());
        $entity->setColor($entityModel->getColor());

        $entity->setMarcaMotor($entityModel->getMarcaMotor());
        $entity->setCombustible($entityModel->getCombustible());

        $entity->setRampas($entityModel->getRampas());
        $entity->setBarras($entityModel->getBarras());
        $entity->setCamaras($entityModel->getCamaras());

        $entity->setLectorCedulas($entityModel->getLectorCedulas());
        $entity->setPublicidad($entityModel->getPublicidad());
        $entity->setGps($entityModel->getGps());

        $entity->setWifi($entityModel->getWifi());

        $entity->setFechaIngreso($entityModel->getFechaIngreso());
        $entity->setFechaRtv1($entityModel->getFechaRtv1());
        $entity->setFechaRtv2($entityModel->getFechaRtv2());

        $entity->setMarcaCajacambio($entityModel->getMarcaCajacambio());
        $entity->setTipoCajacambio($entityModel->getTipoCajacambio());
        $entity->setNumeroUnidad($entityModel->getNumeroUnidad());
        $entity->setAnno($entityModel->getAnno());
        $entity->setValorUnidad($entityModel->getValorUnidad());
        $entity->setCapacidadTanque($entityModel->getCapacidadTanque());

        $entity->setAceitemotor($entityModel->getAceitemotor());
        $entity->setAceitehidraulico($entityModel->getAceitehidraulico());
        $entity->setAceitecajacambios($entityModel->getAceitecajacambios());

        $entity->setMarcaCajacambio($entityModel->getMarcaCajacambio());
        $entity->setTipoCajacambio($entityModel->getTipoCajacambio());

        $entity->setCartelCapacidadlitros($entityModel->getCartelCapacidadlitros());

        $entity->setFiltroAceite($entityModel->getFiltroAceite());
        $entity->setFiltroAgua($entityModel->getFiltroAgua());
        $entity->setFiltroDiesel($entityModel->getFiltroDiesel());
        $entity->setFiltroHidraulico($entityModel->getFiltroHidraulico());
        $entity->setFiltroTransmision($entityModel->getFiltroTransmision());
        $entity->setFiltroCaja($entityModel->getFiltroCaja());

        $entity->setBateria1($entityModel->getBateria1());
        $entity->setBateria2($entityModel->getBateria2());

        return $entity;
    }

    public function fillDataAutobusModel(Autobus $entity)
    {
        $model = new AutobusModel();

        $model->setId($entity->getId());

        $model->setMatricula($entity->getMatricula());
        $model->setNumeroChasis($entity->getNumeroChasis());
        $model->setNumeroMotor($entity->getNumeroMotor());

        $model->setMarca($entity->getMarca());
        $model->setModelo($entity->getModelo());
        $model->setEstilo($entity->getEstilo());

        $model->setPesoBruto($entity->getPesoBruto());
        $model->setPesoTara($entity->getPesoTara());

        $model->setColor($entity->getColor());
        $model->setNumeroPlazas($entity->getNumeroPlazas());

        $model->setMarcaMotor($entity->getMarcaMotor());
        $model->setCombustible($entity->getCombustible());

        $model->setCilindrada($entity->getCilindrada());
        $model->setNumeroCilindros($entity->getNumeroCilindros());
        $model->setPotencia($entity->getPotencia());

        $model->setFechaIngreso($entity->getFechaIngreso());
        $model->setValidoHasta($entity->getValidoHasta());

        $model->setFechaRtv1($entity->getFechaRtv1());
        $model->setFechaRtv2($entity->getFechaRtv2());
        $model->setRampas($entity->getRampas());

        $model->setCapacidadTanque($entity->getCapacidadTanque());

        $model->setBarras($entity->getBarras());
        $model->setCamaras($entity->getCamaras());

        $model->setLectorCedulas($entity->getLectorCedulas());
        $model->setPublicidad($entity->getPublicidad());

        $model->setGps($entity->getGps());
        $model->setWifi($entity->getWifi());

        $model->setNumeroUnidad($entity->getNumeroUnidad());
        $model->setValorUnidad($entity->getValorUnidad());
        $model->setAnno($entity->getAnno());

        $model->setMarcaCajacambio($entity->getMarcaCajacambio());
        $model->setTipoCajacambio($entity->getTipoCajacambio());
        $model->setCartelCapacidadlitros($entity->getCartelCapacidadlitros());

        $model->setAceitecajacambios($entity->getAceitecajacambios());
        $model->setAceitehidraulico($entity->getAceitehidraulico());
        $model->setAceitemotor($entity->getAceitemotor());
        $model->setAceitetransmision($entity->getAceitemotor());

        $model->setBateria1($entity->getBateria1());
        $model->setBateria2($entity->getBateria2());

        $model->setFiltroCaja($entity->getFiltroCaja());
        $model->setFiltroTransmision($entity->getFiltroTransmision());
        $model->setFiltroAgua($entity->getFiltroAgua());
        $model->setFiltroHidraulico($entity->getFiltroHidraulico());
        $model->setFiltroDiesel($entity->getFiltroDiesel());
        $model->setFiltroAceite($entity->getFiltroAceite());

        return $model;
    }

}

?>