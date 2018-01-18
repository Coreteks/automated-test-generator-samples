<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\InstanceMockPass;

class InstanceMockPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\InstanceMockPass
*/
protected $instanceMockPass;

public function setUp()
{
    parent::setUp();

    $this->instanceMockPass = new \Mockery\Generator\StringManipulation\Pass\InstanceMockPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->isInstanceMock()) == false (line 68)

    $actual = $this->instanceMockPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->isInstanceMock()) == true (line 68)

    $actual = $this->instanceMockPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
