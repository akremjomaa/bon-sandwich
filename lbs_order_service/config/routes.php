<?php
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('', function (RouteCollectorProxy $app) {
        $app->get('/orders', \lbs\order\Action\Order\GetOrdersAction::class);
        $app->get('/order/{id}', \lbs\order\Action\Order\GetOrderByIdAction::class);
    }
    );
};