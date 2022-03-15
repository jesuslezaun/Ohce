<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{

    public function execute(string $inputString): string
    {
        if($inputString === "Stop!")
            return "Adios";

        $responseMessage = strrev($inputString);
        if($responseMessage === $inputString)
            $responseMessage .= ", ¡Bonita palabra!";
        return $responseMessage;
    }
}