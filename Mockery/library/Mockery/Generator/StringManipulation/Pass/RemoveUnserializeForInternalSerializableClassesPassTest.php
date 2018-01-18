<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass;

class RemoveUnserializeForInternalSerializableClassesPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass
*/
protected $removeUnserializeForInternalSerializableClassesPass;

public function setUp()
{
    parent::setUp();

    $this->removeUnserializeForInternalSerializableClassesPass = new \Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 39)
    // if (!$target->hasInternalAncestor() || !$target->implementsInterface("Serializable")) == false (line 43)

    $actual = $this->removeUnserializeForInternalSerializableClassesPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 39)
    // if (!$target->hasInternalAncestor() || !$target->implementsInterface("Serializable")) == true (line 43)

    $actual = $this->removeUnserializeForInternalSerializableClassesPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == true (line 39)

    $actual = $this->removeUnserializeForInternalSerializableClassesPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
