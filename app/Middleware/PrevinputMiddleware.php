<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 05.11.2018
 * Time: 17:01
 */

namespace App\Middleware;


class PrevinputMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        $this->container->view->getEnvironment()->addGlobal('prev',$_SESSION['prev']);
        $_SESSION['prev'] = $request->getParams();

        $response = $next($request, $response);
        return $response;
    }

}