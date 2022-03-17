<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private TimeManager $timeManager;
    private string $name = "";

    public function __construct(TimeManager $timeManager)
    {
        $this->timeManager = $timeManager;
    }

    public function execute(string $inputString): string
    {
        if(strtok($inputString, " ") === "ohce")
        {
            $hour = intval($this->timeManager->getTime());
            $this->name = substr($inputString,
                strpos($inputString, " ") + 1,
                strlen($inputString) - strpos($inputString, " ") + 1);
            if(6 < $hour && $hour < 12)
                return "¡Buenos dias " . $this->name . "!";
            elseif(12 < $hour && $hour < 20)
                return "¡Buenas tardes " . $this->name . "!";
            else
                return "¡Buenas noches " . $this->name . "!";
        }

        if($inputString === "Stop!")
        {
            if($this->name === "")
                return "Adios";
            else
                return "Adios " . $this->name;
        }

        $reversedWord = strrev($inputString);
        if($reversedWord === $inputString)
            return $reversedWord . ", ¡Bonita palabra!";

        return $reversedWord;
    }
}