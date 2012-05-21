<?php

namespace Buseta\BusesBundle\Handle;

use Buseta\BusesBundle\Entity\ArchivoAdjunto;
use Buseta\BusesBundle\Entity\Autobus;
use Buseta\BusesBundle\Form\Model\AutobusModel;
use Buseta\BusesBundle\Form\Model\FileModel;
use Symfony\Component\HttpFoundation\File\File;

class HandleAutobus
{
    public function HandleAutobusNew($em, AutobusModel $entityModel)
    {
        /** @var Autobus $entity */
        $entity = new Autobus();
        $directorio = __DIR__.'/../../../../web/images/';

        $fileFrontal = $entityModel->getImagenFrontal();

        if($fileFrontal != null)
        {
            $nombre = $entityModel->getMatricula()."-frontal.jpg";
            $entity->setImagenFrontal($nombre);
            $fileFrontal->move($directorio,$nombre);
        }

        $fileLateralD = $entityModel->getImagenLateralD();
        if($fileLateralD != null)
        {
            $nombre = $entityModel->getMatricula()."-lateral_d.jpg";
            $entity->setImagenLateralD($nombre);
            $fileLateralD->move($directorio,$nombre);
        }

        $fileLateralI = $entityModel->getImagenLateralI();
        if($fileLateralI != null)
        {
            $nombre = $entityModel->getMatricula()."-lateral_i.jpg";
            $entity->setImagenLateralI($nombre);
            $fileLateralI->move($directorio,$nombre);
        }

        $fileTrasera = $entityModel->getImagenTrasera();
        if($fileTrasera != null)
        {
            $nombre = $entityModel->getMatricula()."-trasera.jpg";
            $entity->setImagenTrasera($nombre);
            $fileTrasera->move($directorio,$nombre);
        }

        /*$directorio = __DIR__.'/../../../../web/files/';
        $fileArchivoAdjunto = $entityModel->getArchivoAdjunto();
        foreach($fileArchivoAdjunto as $files)
        {

            $nombre = $files->getValor()->getClientOriginalName();

            $archivo = new ArchivoAdjunto();
            $archivo->setValor($nombre);

            $entity->addArchivoAdjunto($archivo);
            $files->getValor()->move($directorio, $nombre);
        }


        print_r(count($entity->getArchivoAdjunto()));exit;
        */

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

        $entity->setCarterCapacidadlitros($entityModel->getCarterCapacidadlitros());

        if($entityModel->getFiltroAceite()->hasData())
            $entity->setFiltroAceite($entityModel->getFiltroAceite());
        if($entityModel->getFiltroAgua()->hasData())
            $entity->setFiltroAgua($entityModel->getFiltroAgua());
        if($entityModel->getFiltroDiesel()->hasData())
            $entity->setFiltroDiesel($entityModel->getFiltroDiesel());
        if($entityModel->getFiltroHidraulico()->hasData())
            $entity->setFiltroHidraulico($entityModel->getFiltroHidraulico());
        if($entityModel->getFiltroTransmision()->hasData())
            $entity->setFiltroTransmision($entityModel->getFiltroTransmision());
        if($entityModel->getFiltroCaja()->hasData())
            $entity->setFiltroCaja($entityModel->getFiltroCaja());

        $entity->setBateria1($entityModel->getBateria1());
        $entity->setBateria2($entityModel->getBateria2());

        $em->persist($entity);
        $em->flush();

        return $entity;

    }

    public function HandleAutobusEdit(AutobusModel $entityModel, Autobus $entity)
    {
        /** @var Autobus $entity */
        $directorio = __DIR__.'/../../../../web/images/';

        $fileFrontal = $entityModel->getImagenFrontal();
        if($fileFrontal != null)
        {
            $nombre = $entityModel->getMatricula()."-frontal.jpg";
            $entity->setImagenFrontal($nombre);
            $fileFrontal->move($directorio,$nombre);
        }

        $fileLateralD = $entityModel->getImagenLateralD();
        if($fileLateralD != null)
        {
            $nombre = $entityModel->getMatricula()."-lateral_d.jpg";
            $entity->setImagenLateralD($nombre);
            $fileLateralD->move($directorio,$nombre);
        }

        $fileLateralI = $entityModel->getImagenLateralI();
        if($fileLateralI != null)
        {
            $nombre = $entityModel->getMatricula()."-lateral_i.jpg";
            $entity->setImagenLateralI($nombre);
            $fileLateralI->move($directorio,$nombre);
        }

        $fileTrasera = $entityModel->getImagenTrasera();
        if($fileTrasera != null)
        {
            $nombre = $entityModel->getMatricula()."-trasera.jpg";
            $entity->setImagenTrasera($nombre);
            $fileTrasera->move($directorio,$nombre);
        }

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

        $entity->setCarterCapacidadlitros($entityModel->getCarterCapacidadlitros());

        if($entityModel->getFiltroAceite()->hasData())
            $entity->setFiltroAceite($entityModel->getFiltroAceite());
        if($entityModel->getFiltroAgua()->hasData())
            $entity->setFiltroAgua($entityModel->getFiltroAgua());
        if($entityModel->getFiltroDiesel()->hasData())
            $entity->setFiltroDiesel($entityModel->getFiltroDiesel());
        if($entityModel->getFiltroHidraulico()->hasData())
            $entity->setFiltroHidraulico($entityModel->getFiltroHidraulico());
        if($entityModel->getFiltroTransmision()->hasData())
            $entity->setFiltroTransmision($entityModel->getFiltroTransmision());
        if($entityModel->getFiltroCaja()->hasData())
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
        $model->setCarterCapacidadlitros($entity->getCarterCapacidadlitros());

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