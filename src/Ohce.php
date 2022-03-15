<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{

    public function execute(string $inputString): string
    {
        $responseMessage = strrev($inputString);
        if($responseMessage === $inputString)
            $responseMessage .= ", ¡Bonita palabra!";
        return $responseMessage;
    }
}