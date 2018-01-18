<?php

namespace tests\Illuminate\Routing;

use Illuminate\Routing\RouteSignatureParameters;
use Mockery as m;

class RouteSignatureParametersTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\RouteSignatureParameters
*/
protected $routeSignatureParameters;

public function setUp()
{
    parent::setUp();

    $this->routeSignatureParameters = new \Illuminate\Routing\RouteSignatureParameters();
}

public function testFromAction0()
{
    $action = [];
    $subClass = m::mock('UntypedParameter_subClass_');

    // TODO: Your mock expectations here

    $actual = $this->routeSignatureParameters->fromAction($action, $subClass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
