<?php

namespace tests;

use CI_Cache_memcached;
use Mockery as m;

class CI_Cache_memcachedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_memcached
*/
protected $cI_Cache_memcached;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_memcached = new \CI_Cache_memcached();
}

public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_memcached->get($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == false (line 172)
    // if ($this->_memcached instanceof \Memcached) == false (line 177)
    // if ($this->_memcached instanceof \Memcache) == false (line 181)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == false (line 172)
    // if ($this->_memcached instanceof \Memcached) == false (line 177)
    // if ($this->_memcached instanceof \Memcache) == true (line 181)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == false (line 172)
    // if ($this->_memcached instanceof \Memcached) == true (line 177)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave3()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == true (line 172)
    // if ($this->_memcached instanceof \Memcached) == false (line 177)
    // if ($this->_memcached instanceof \Memcache) == false (line 181)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave4()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == true (line 172)
    // if ($this->_memcached instanceof \Memcached) == false (line 177)
    // if ($this->_memcached instanceof \Memcache) == true (line 181)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave5()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($raw !== \TRUE) == true (line 172)
    // if ($this->_memcached instanceof \Memcached) == true (line 177)

    $actual = $this->cI_Cache_memcached->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_memcached->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result = $this->_memcached->increment($id, $offset)) === \FALSE) == false (line 213)

    $actual = $this->cI_Cache_memcached->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement1()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result = $this->_memcached->increment($id, $offset)) === \FALSE) == true (line 213)

    $actual = $this->cI_Cache_memcached->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result = $this->_memcached->decrement($id, $offset)) === \FALSE) == false (line 232)

    $actual = $this->cI_Cache_memcached->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement1()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result = $this->_memcached->decrement($id, $offset)) === \FALSE) == true (line 232)

    $actual = $this->cI_Cache_memcached->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_memcached->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_memcached->cache_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($stored) !== 3) == false (line 276)

    $actual = $this->cI_Cache_memcached->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($stored) !== 3) == true (line 276)

    $actual = $this->cI_Cache_memcached->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_memcached->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_memcached instanceof \Memcache) == false (line 316)
    // if ($this->_memcached instanceof \Memcached && \method_exists($this->_memcached, 'quit')) == false (line 320)

    $actual = $this->cI_Cache_memcached->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_memcached instanceof \Memcache) == false (line 316)
    // if ($this->_memcached instanceof \Memcached && \method_exists($this->_memcached, 'quit')) == true (line 320)

    $actual = $this->cI_Cache_memcached->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_memcached instanceof \Memcache) == true (line 316)

    $actual = $this->cI_Cache_memcached->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
