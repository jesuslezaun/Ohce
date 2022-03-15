<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{

    public function execute(string $inputString): string
    {
        return strrev($inputString);
    }
}