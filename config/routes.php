<?php


use App\Controller\DefaultController;
use App\Controller\RegistrationController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

    $routes->add('home', '/home')
        ->controller([DefaultController::class, 'getPage'])
        ->methods(['get'])
    ;

};