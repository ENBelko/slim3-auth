<?php
/**
 * Created by PhpStorm.
 * User: ENBElko
 * Date: 06.11.2018
 * Time: 16:53
 */

namespace App\Validation\Rules;

use App\Models\User;
use Respect\Validation\Rules\AbstractRule;

class MatchesPassword extends AbstractRule
{
    protected $password;

    public function __construct($password)
    {
        $this->password = $password;
    }

    public function validate($input)
    {
        return password_verify($input, $this->password);
    }
}