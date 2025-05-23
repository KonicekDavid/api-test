<?php

declare(strict_types=1);

namespace App\Core;

use Contributte\ApiRouter\ApiRoute;
use Nette;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList();

        $apiModule = new RouteList('Api');
        $apiModule[] = new ApiRoute('/auth/register', 'Authorization', [
            'methods' => ['POST' => 'register']
        ]);
        $apiModule[] = new ApiRoute('/auth/login', 'Authorization', [
            'methods' => ['POST' => 'login']
        ]);
        $apiModule[] = new ApiRoute('/users[/<id>]', 'User', [
            'methods' => [
                'GET' => 'default',
                'POST' => 'default',
                'PUT' => 'default',
                'DELETE' => 'default'
            ]
        ]);
        $apiModule[] = new ApiRoute('/articles[/<id>]', 'Article', [
            'methods' => [
                'GET' => 'default',
                'POST' => 'default',
                'PUT' => 'default',
                'DELETE' => 'default'
            ]
        ]);

        $router[] = $apiModule;

        return $router;
    }
}
