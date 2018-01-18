<?php

namespace tests\Mockery\Generator\StringManipulation\Pass;

use Mockery as m;
use Mockery\Generator\StringManipulation\Pass\TraitPass;

class TraitPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Generator\StringManipulation\Pass\TraitPass
*/
protected $traitPass;

public function setUp()
{
    parent::setUp();

    $this->traitPass = new \Mockery\Generator\StringManipulation\Pass\TraitPass();
}

public function testApply0()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($traits)) == false (line 31)

    $actual = $this->traitPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testApply1()
{
    $code = m::mock('UntypedParameter_code_');
    $config = m::mock(\Mockery\Generator\MockConfiguration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($traits)) == true (line 31)

    $actual = $this->traitPass->apply($code, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
