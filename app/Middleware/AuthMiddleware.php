<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 05.11.2018
 * Time: 17:01
 */

namespace App\Middleware;


class AuthMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (!$this->container->auth->check()) {
           $this->container->flash->addMessage('error','You have to be signed in');
           return$response->withRedirect($this->container->router->pathFor('auth.signin'));
        }

        $response = $next($request, $response);
        return $response;
    }

}