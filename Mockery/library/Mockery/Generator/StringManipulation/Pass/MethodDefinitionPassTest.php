<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\MethodDefinitionPass;

class MethodDefinitionPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\MethodDefinitionPass
*/
protected $methodDefinitionPass;

public function setUp()
{
    parent::setUp();

    $this->methodDefinitionPass = new \Mockery\Generator\StringManipulation\Pass\MethodDefinitionPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == false (line 32)
    // if ($method->isProtected()) == false (line 34)
    // if ($method->isStatic()) == false (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == false (line 32)
    // if ($method->isProtected()) == false (line 34)
    // if ($method->isStatic()) == true (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply3()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == false (line 32)
    // if ($method->isProtected()) == true (line 34)
    // if ($method->isStatic()) == false (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply4()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == false (line 32)
    // if ($method->isProtected()) == true (line 34)
    // if ($method->isStatic()) == true (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply5()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == true (line 32)
    // if ($method->isStatic()) == false (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply6()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->isPublic()) == true (line 32)
    // if ($method->isStatic()) == true (line 40)

    $actual = $this->methodDefinitionPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
