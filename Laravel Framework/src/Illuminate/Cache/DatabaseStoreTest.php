<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\DatabaseStore;
use Illuminate\Database\ConnectionInterface;
use Mockery as m;

class DatabaseStoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_connection;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var \Illuminate\Cache\DatabaseStore
*/
protected $databaseStore;

public function setUp()
{
    parent::setUp();

    $this->_connection = m::mock(\Illuminate\Database\ConnectionInterface::class);
    $this->_table = null;
    $this->_prefix = null;
    $this->databaseStore = new \Illuminate\Cache\DatabaseStore($this->_connection, $this->_table, $this->_prefix);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($cache)) == false (line 66)
    // if ($this->currentTime() >= $cache->expiration) == false (line 75)

    $actual = $this->databaseStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($cache)) == false (line 66)
    // if ($this->currentTime() >= $cache->expiration) == true (line 75)

    $actual = $this->databaseStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($cache)) == true (line 66)

    $actual = $this->databaseStore->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->put($key, $value, $minutes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->increment($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->decrement($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->forever($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->databaseStore->forget($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseStore->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseStore->getConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseStore->getPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
