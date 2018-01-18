<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\MagicMethodTypeHintsPass;

class MagicMethodTypeHintsPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\MagicMethodTypeHintsPass
*/
protected $magicMethodTypeHintsPass;

public function setUp()
{
    parent::setUp();

    $this->magicMethodTypeHintsPass = new \Mockery\Generator\StringManipulation\Pass\MagicMethodTypeHintsPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->magicMethodTypeHintsPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->magicMethodTypeHintsPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->magicMethodTypeHintsPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply3()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->magicMethodTypeHintsPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMagicMethods0()
{
    $class = m::mock(\Mockery\Generator\TargetClassInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($class)) == false (line 81)

    $actual = $this->magicMethodTypeHintsPass->getMagicMethods($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMagicMethods1()
{
    $class = m::mock(\Mockery\Generator\TargetClassInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($class)) == true (line 81)

    $actual = $this->magicMethodTypeHintsPass->getMagicMethods($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
