<?php

namespace tests\Illuminate\Routing\Matching;

use Illuminate\Routing\Matching\MethodValidator;
use Mockery as m;

class MethodValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Matching\MethodValidator
*/
protected $methodValidator;

public function setUp()
{
    parent::setUp();

    $this->methodValidator = new \Illuminate\Routing\Matching\MethodValidator();
}

public function testMatches0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->methodValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
