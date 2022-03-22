<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use Deg540\PHPTestingBoilerplate\TimeManager;
use Mockery;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function givenWordReturnsWordReversed()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $responseMessage = $ohce->execute("hola");

        self::assertEquals("aloh", $responseMessage);
    }

    /**
     * @test
     */
    public function givenPalindromeWordReturnsWordReversedAndBonitaPalabraMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $responseMessage = $ohce->execute("oto");

        self::assertEquals("oto, ¡Bonita palabra!", $responseMessage);
    }

    /**
     * @test
     */
    public function givenStopReturnsAdiosMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $responseMessage = $ohce->execute("Stop!");

        self::assertEquals("Adios", $responseMessage);
    }

    /**
     * @test
     */
    public function havingNameGivenStopReturnsAdiosNameMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        //Duda
        $timeManager
            ->expects("getTime")
            ->andReturn('3');

        $ohce->execute("ohce Pedro");
        $responseMessage = $ohce->execute("Stop!");

        self::assertEquals("Adios Pedro", $responseMessage);
    }

    /**
     * @test
     */
    public function givenOhceNameBetween20And6ReturnsBuenasNochesNameMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $timeManager
            ->expects("getTime")
            ->andReturn('4');

        $responseMessage = $ohce->execute("ohce Pedro");

        self::assertEquals("¡Buenas noches Pedro!", $responseMessage);
    }

    /**
     * @test
     */
    public function givenOhceNameBetween6And12ReturnsBuenosDiasNameMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $timeManager
            ->expects('getTime')
            ->andReturn('8');

        $responseMessage = $ohce->execute("ohce Pedro");

        self::assertEquals("¡Buenos dias Pedro!", $responseMessage);
    }

    /**
     * @test
     */
    public function givenOhceNameBetween12And20ReturnsBuenasTardesNameMessage()
    {
        $timeManager = Mockery::mock(TimeManager::class);
        $ohce = new Ohce($timeManager);

        $timeManager
            ->expects('getTime')
            ->andReturn('14');

        $responseMessage = $ohce->execute("ohce Pedro");

        self::assertEquals("¡Buenas tardes Pedro!", $responseMessage);
    }
}
