<?php

namespace Buseta\NomencladorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BusetaNomencladorBundle extends Bundle
{
    public function getParent() {
        return 'AdmingeneratorGeneratorBundle';
    }
}
