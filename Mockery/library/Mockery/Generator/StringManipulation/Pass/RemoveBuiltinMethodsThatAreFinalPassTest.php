<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\RemoveBuiltinMethodsThatAreFinalPass;

class RemoveBuiltinMethodsThatAreFinalPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\RemoveBuiltinMethodsThatAreFinalPass
*/
protected $removeBuiltinMethodsThatAreFinalPass;

public function setUp()
{
    parent::setUp();

    $this->removeBuiltinMethodsThatAreFinalPass = new \Mockery\Generator\StringManipulation\Pass\RemoveBuiltinMethodsThatAreFinalPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 41)

    $actual = $this->removeBuiltinMethodsThatAreFinalPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 41)
    // if ($method->isFinal() && isset($this->methods[$method->getName()])) == false (line 46)

    $actual = $this->removeBuiltinMethodsThatAreFinalPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply2()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == false (line 41)
    // if ($method->isFinal() && isset($this->methods[$method->getName()])) == true (line 46)

    $actual = $this->removeBuiltinMethodsThatAreFinalPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply3()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$target) == true (line 41)

    $actual = $this->removeBuiltinMethodsThatAreFinalPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
