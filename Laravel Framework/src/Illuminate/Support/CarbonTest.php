<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Carbon;
use Mockery as m;

class CarbonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Carbon
*/
protected $carbon;

public function setUp()
{
    parent::setUp();

    $this->carbon = new \Illuminate\Support\Carbon();
}

public function testJsonSerialize0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$serializer) == false (line 27)

    $actual = $this->carbon->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJsonSerialize1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::$serializer) == true (line 27)

    $actual = $this->carbon->jsonSerialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSerializeUsing0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->serializeUsing($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set_state0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->carbon->__set_state($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
