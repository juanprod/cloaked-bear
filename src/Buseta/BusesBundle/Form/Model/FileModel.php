<?php

namespace Buseta\BusesBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * FileModel
 */
class FileModel
{

    /**
     * @Assert\File(maxSize="6000000")
     * @var UploadedFile $file
     */
    private $valor;

    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getValor()
    {
        return $this->valor;
    }





}