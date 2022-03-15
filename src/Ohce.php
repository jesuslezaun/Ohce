<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{

    public function execute(string $inputString): string
    {
        if($inputString === "Stop!")
            return "Adios";

        $reversedWord = strrev($inputString);
        if($reversedWord === $inputString)
            return $reversedWord . ", ¡Bonita palabra!";

        return $reversedWord;
    }
}