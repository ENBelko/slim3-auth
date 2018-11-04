<?php

namespace App\Controllers;

use App\Models\User;

use \Slim\Views\Twig as View;

class HomeController extends Controller
{

    public function index($request, $response)
    {
        User::create([
                'name' => 'Dinnoo',
                'email' => 'sdsafs',
                'password' => '1234'
            ]
        );
        return $this->view->render($response, 'home.twig');
    }
}