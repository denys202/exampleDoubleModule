<?php

namespace PrestaShop\Module\Abc;

use PrestaShop\Module\Modulea\AbstractParentService;

class ChildService extends AbstractParentService
{

    public function handleHello(): void
    {
        echo "Override from child";
    }
}
