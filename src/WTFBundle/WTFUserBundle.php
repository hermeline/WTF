<?php
/**
 * Created by PhpStorm.
 * User: bibouille
 * Date: 17/11/17
 * Time: 10:52
 */
namespace WTFUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WTFUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}