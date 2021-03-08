<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function(ContainerConfigurator $configurator) {
    // default configuration for services in *this* file
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
    ;

    $services->load('App\\Recipe\\Infrastructure\\Action\\', '../../src/Recipe/Infrastructure/Action/')
        ->tag('controller.service_arguments');
};