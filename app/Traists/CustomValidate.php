<?php

namespace App\Traists;

trait CustomValidate
{
    public function validatePassword(string $password): string
    {
        // validações
        return $password;
    }
}
