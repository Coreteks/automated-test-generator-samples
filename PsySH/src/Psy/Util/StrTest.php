<?php

namespace tests\Psy\Util;

use Mockery as m;
use Psy\Util\Str;

class StrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Util\Str
*/
protected $str;

public function setUp()
{
    parent::setUp();

    $this->str = new \Psy\Util\Str();
}

public function testUnvis0()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    $actual = $this->str->unvis($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
