<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\RemoveDestructorPass;

class RemoveDestructorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\RemoveDestructorPass
*/
protected $removeDestructorPass;

public function setUp()
{
    parent::setUp();

    $this->removeDestructorPass = new \Mockery\Generator\StringManipulation\Pass\RemoveDestructorPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 35)
    // if (!$config->isMockOriginalDestructor()) == false (line 39)

    $actual = $this->removeDestructorPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 35)
    // if (!$config->isMockOriginalDestructor()) == true (line 39)

    $actual = $this->removeDestructorPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == true (line 35)

    $actual = $this->removeDestructorPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
