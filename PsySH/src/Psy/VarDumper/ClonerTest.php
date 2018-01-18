<?php

namespace tests\Psy\VarDumper;

use Mockery as m;
use Psy\VarDumper\Cloner;

class ClonerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\VarDumper\Cloner
*/
protected $cloner;

public function setUp()
{
    parent::setUp();

    $this->cloner = new \Psy\VarDumper\Cloner();
}

public function testCloneVar0()
{
    $var = m::mock('UntypedParameter_var_');
    $filter = m::mock('UntypedParameter_filter_');

    // TODO: Your mock expectations here

    $actual = $this->cloner->cloneVar($var, $filter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
