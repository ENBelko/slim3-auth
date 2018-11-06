<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 06.11.2018
 * Time: 10:54
 */

namespace App\Validation\Rules;

use App\Models\User;
use Respect\Validation\Rules\AbstractRule;

class EmailAvailable extends AbstractRule
{
    public function validate($input)
    {
        return User::where('email', $input)->count() === 0;
    }

}