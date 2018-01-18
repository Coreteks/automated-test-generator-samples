<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\ClassNamePass;

class ClassNamePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\ClassNamePass
*/
protected $classNamePass;

public function setUp()
{
    parent::setUp();

    $this->classNamePass = new \Mockery\Generator\StringManipulation\Pass\ClassNamePass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->classNamePass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
