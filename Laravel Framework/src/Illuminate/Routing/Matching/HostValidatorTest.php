<?php

namespace tests\Illuminate\Routing\Matching;

use Illuminate\Routing\Matching\HostValidator;
use Mockery as m;

class HostValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Matching\HostValidator
*/
protected $hostValidator;

public function setUp()
{
    parent::setUp();

    $this->hostValidator = new \Illuminate\Routing\Matching\HostValidator();
}

public function testMatches0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route->getCompiled()->getHostRegex())) == false (line 19)

    $actual = $this->hostValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches1()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($route->getCompiled()->getHostRegex())) == true (line 19)

    $actual = $this->hostValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
