<?php

namespace tests\Illuminate\Routing\Matching;

use Illuminate\Routing\Matching\SchemeValidator;
use Mockery as m;

class SchemeValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Matching\SchemeValidator
*/
protected $schemeValidator;

public function setUp()
{
    parent::setUp();

    $this->schemeValidator = new \Illuminate\Routing\Matching\SchemeValidator();
}

public function testMatches0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($route->httpOnly()) == false (line 19)
    // if ($route->secure()) == false (line 21)

    $actual = $this->schemeValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches1()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($route->httpOnly()) == false (line 19)
    // if ($route->secure()) == true (line 21)

    $actual = $this->schemeValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatches2()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($route->httpOnly()) == true (line 19)

    $actual = $this->schemeValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
