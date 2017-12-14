<?php

namespace WTFBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class WTFBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
