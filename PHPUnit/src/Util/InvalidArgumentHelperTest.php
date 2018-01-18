<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\InvalidArgumentHelper;

class InvalidArgumentHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\InvalidArgumentHelper
*/
protected $invalidArgumentHelper;

public function setUp()
{
    parent::setUp();

    $this->invalidArgumentHelper = new \PHPUnit\Util\InvalidArgumentHelper();
}

public function testFactory0()
{
    $argument = m::mock('UntypedParameter_argument_');
    $type = m::mock('UntypedParameter_type_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->invalidArgumentHelper->factory($argument, $type, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
