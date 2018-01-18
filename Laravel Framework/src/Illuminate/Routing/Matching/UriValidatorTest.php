<?php

namespace tests\Illuminate\Routing\Matching;

use Illuminate\Routing\Matching\UriValidator;
use Mockery as m;

class UriValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Matching\UriValidator
*/
protected $uriValidator;

public function setUp()
{
    parent::setUp();

    $this->uriValidator = new \Illuminate\Routing\Matching\UriValidator();
}

public function testMatches0()
{
    $route = m::mock(\Illuminate\Routing\Route::class);
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->uriValidator->matches($route, $request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
