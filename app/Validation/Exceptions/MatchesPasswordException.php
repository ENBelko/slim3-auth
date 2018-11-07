<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 06.11.2018
 * Time: 11:03
 */

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

class MatchesPasswordException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'Password does not match.',
        ]
    ];
}