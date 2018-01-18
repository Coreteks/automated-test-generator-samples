<?php

namespace tests\Illuminate\Routing\Exceptions;

use Illuminate\Routing\Exceptions\UrlGenerationException;
use Mockery as m;

class UrlGenerationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Exceptions\UrlGenerationException
*/
protected $urlGenerationException;

public function setUp()
{
    parent::setUp();

    $this->urlGenerationException = new \Illuminate\Routing\Exceptions\UrlGenerationException();
}

public function testForMissingParameters0()
{
    $route = m::mock('UntypedParameter_route_');

    // TODO: Your mock expectations here

    $actual = $this->urlGenerationException->forMissingParameters($route);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
