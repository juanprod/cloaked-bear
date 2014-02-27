<?php

namespace Buseta\DataBundle\Form\Model;


class Autobus
{
    private $combustible;

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

} 