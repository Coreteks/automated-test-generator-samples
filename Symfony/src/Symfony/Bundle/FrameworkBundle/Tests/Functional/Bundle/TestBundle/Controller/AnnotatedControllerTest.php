<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\AnnotatedController;

class AnnotatedControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\AnnotatedController
*/
protected $annotatedController;

public function setUp()
{
    parent::setUp();

    $this->annotatedController = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\Controller\AnnotatedController();
}

public function testRequestDefaultNullAction0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->annotatedController->requestDefaultNullAction($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgumentDefaultNullWithoutRouteParamAction0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->annotatedController->argumentDefaultNullWithoutRouteParamAction($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgumentDefaultNullWithRouteParamAction0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->annotatedController->argumentDefaultNullWithRouteParamAction($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgumentWithoutDefaultWithRouteParamAndDefaultAction0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->annotatedController->argumentWithoutDefaultWithRouteParamAndDefaultAction($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
