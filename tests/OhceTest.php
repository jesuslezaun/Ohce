<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Ohce $ohce;

    /**
     * @setup
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function ohceGivenWordReturnsWordReversed()
    {
        $responseMessage = $this->ohce->execute("hola");

        self::assertEquals("aloh", $responseMessage);
    }

    /**
     * @test
     */
    public function ohceGivenPalindromeWordReturnsWordReversedAndBonitaPalabraMessage()
    {
        $responseMessage = $this->ohce->execute("oto");

        self::assertEquals("oto, ¡Bonita palabra!", $responseMessage);
    }

    /**
     * @test
     */
    public function ohceGivenStopReturnsAdiosMessage()
    {
        $responseMessage = $this->ohce->execute("Stop!");

        self::assertEquals("Adios", $responseMessage);
    }
}
