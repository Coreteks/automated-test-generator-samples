<?php

namespace tests\Mockery;

use Mockery as m;
use Mockery\Instantiator;

class InstantiatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Instantiator
*/
protected $instantiator;

public function setUp()
{
    parent::setUp();

    $this->instantiator = new \Mockery\Instantiator();
}

public function testInstantiate0()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    $actual = $this->instantiator->instantiate($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildFactory0()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isInstantiableViaReflection($reflectionClass)) == false (line 72)

    $actual = $this->instantiator->buildFactory($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildFactory1()
{
    $className = m::mock('UntypedParameter_className_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isInstantiableViaReflection($reflectionClass)) == true (line 72)

    $actual = $this->instantiator->buildFactory($className);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
