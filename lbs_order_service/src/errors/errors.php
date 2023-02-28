<?php
use Slim\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
return [
    'notFoundHandler' => function (Container $c) {
        return function (Request $rq, Response $rs) : Response {

            $rs = $rs->withStatus(404)->withHeader('Content-Type', 'application/json');
            $rs->write(json_encode([
                'type' => 'error',
                'error' => 404,
                'message' => "l'identifiant de la ressource demandée ne correspond à
            aucune ressource disponible"
            ]));
            return $rs;
        };
    }
];