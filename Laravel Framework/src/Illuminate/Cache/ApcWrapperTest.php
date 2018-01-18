<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\ApcWrapper;
use Mockery as m;

class ApcWrapperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\ApcWrapper
*/
protected $apcWrapper;

public function setUp()
{
    parent::setUp();

    $this->apcWrapper = new \Illuminate\Cache\ApcWrapper();
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->put($key, $value, $seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->delete($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->apcWrapper->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
