<?php

namespace App\Traists;

use Illuminate\Validation\ValidationException;

trait CustomValidate
{
    public function validatePassword(string $password): string
    {
        $lowercase = preg_match('/[a-z]/', $password);
        $uppercase = preg_match('/[A-Z]/', $password);
        $number = preg_match('/[0-9]/', $password);
        $specialChar = preg_match('/[^\w]/', $password);

        if (!$lowercase) {
            throw ValidationException::withMessages(['password' => 'A senha deve ter ao menos uma letra minúscula.']);
        } else if(!$uppercase) {
            throw ValidationException::withMessages(['password' => 'A senha deve ter ao menos uma letra maíuscula.']);
        } else if(!$number) {
            throw ValidationException::withMessages(['password' => 'A senha deve ter ao menos um número.']);
        } else if(!$specialChar) {
            throw ValidationException::withMessages(['password' => 'A senha deve ter ao menos um caractere especial.']);
        }

        return $password;
    }
}
