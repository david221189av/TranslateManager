<?php

namespace Terra\TransManagerBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Terra\TransManagerBundle\DependencyInjection\CompilerPass\TransManagerCompilerPass;

class TransManagerBundle extends Bundle {
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TransManagerCompilerPass());
    }
}
