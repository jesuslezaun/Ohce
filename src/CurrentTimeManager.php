<?php

namespace Deg540\PHPTestingBoilerplate;

class CurrentTimeManager implements TimeManager
{
    public function getTime(): string
    {
        return date("H");
    }
}
