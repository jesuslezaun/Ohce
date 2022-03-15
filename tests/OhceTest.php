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

    /**
     * @test
     */
    public function ohceGivenPalindromeWordReturnsWordReversedAndBonitaPalabraMessage()
    {
        $ohce = new Ohce();

        $responseMessage = $ohce->execute("oto");

        self::assertEquals("oto, ¡Bonita palabra!", $responseMessage);
    }

    /**
     * @test
     */
    public function ohceGivenStopReturnsAdiosMessage()
    {
        $ohce = new Ohce();

        $responseMessage = $ohce->execute("Stop!");

        self::assertEquals("Adios", $responseMessage);
    }
}
