<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function ohceGivenWordReturnsWordReversed()
    {
        $ohce = new Ohce();

        $responseMessage = $ohce->execute("hola");

        self::assertEquals("aloh", $responseMessage);
    }
}
