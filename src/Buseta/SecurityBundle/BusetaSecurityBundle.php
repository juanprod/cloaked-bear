<?php

namespace Buseta\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BusetaSecurityBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
