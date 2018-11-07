<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 05.11.2018
 * Time: 17:01
 */

namespace App\Middleware;


class GuestMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if ($this->container->auth->check()) {
            return $response->withRedirect($this->container->router->pathFor('home'));
        }

        $response = $next($request, $response);
        return $response;
    }

}