<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\ApcStore;
use Illuminate\Cache\ApcWrapper;
use Mockery as m;

class ApcStoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_apc;
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var \Illuminate\Cache\ApcStore
*/
protected $apcStore;

public function setUp()
{
    parent::setUp();

    $this->_apc = m::mock(\Illuminate\Cache\ApcWrapper::class);
    $this->_prefix = null;
    $this->apcStore = new \Illuminate\Cache\ApcStore($this->_apc, $this->_prefix);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== false) == false (line 48)

    $actual = $this->apcStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== false) == true (line 48)

    $actual = $this->apcStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->apcStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->apcStore->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->apcStore->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->apcStore->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->apcStore->forget($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->apcStore->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->apcStore->getPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
