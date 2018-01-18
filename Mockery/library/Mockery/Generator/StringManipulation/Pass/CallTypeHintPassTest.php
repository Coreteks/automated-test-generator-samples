<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\CallTypeHintPass;

class CallTypeHintPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\CallTypeHintPass
*/
protected $callTypeHintPass;

public function setUp()
{
    parent::setUp();

    $this->callTypeHintPass = new \Mockery\Generator\StringManipulation\Pass\CallTypeHintPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->requiresCallTypeHintRemoval()) == false (line 29)
    // if ($config->requiresCallStaticTypeHintRemoval()) == false (line 37)

    $actual = $this->callTypeHintPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->requiresCallTypeHintRemoval()) == false (line 29)
    // if ($config->requiresCallStaticTypeHintRemoval()) == true (line 37)

    $actual = $this->callTypeHintPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->requiresCallTypeHintRemoval()) == true (line 29)
    // if ($config->requiresCallStaticTypeHintRemoval()) == false (line 37)

    $actual = $this->callTypeHintPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply3()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($config->requiresCallTypeHintRemoval()) == true (line 29)
    // if ($config->requiresCallStaticTypeHintRemoval()) == true (line 37)

    $actual = $this->callTypeHintPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
