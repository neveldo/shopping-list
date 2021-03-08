<?php

use App\Recipe\Infrastructure\Action\Recipe\View;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('app_recipes_list', '/recipes')
        ->controller(View::class)
    ;
};