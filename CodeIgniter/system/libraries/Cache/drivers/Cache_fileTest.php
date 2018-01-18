<?php

namespace tests;

use CI_Cache_file;
use Mockery as m;

class CI_Cache_fileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_file
*/
protected $cI_Cache_file;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_file = new \CI_Cache_file();
}

public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_file->get($id);
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
    // if (\write_file($this->_cache_path . $id, \serialize($contents))) == false (line 104)

    $actual = $this->cI_Cache_file->save($id, $data, $ttl, $raw);
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
    // if (\write_file($this->_cache_path . $id, \serialize($contents))) == true (line 104)

    $actual = $this->cI_Cache_file->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_file->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == false (line 139)
    // if (!\is_int($data['data'])) == false (line 143)

    $actual = $this->cI_Cache_file->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement1()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == false (line 139)
    // if (!\is_int($data['data'])) == true (line 143)

    $actual = $this->cI_Cache_file->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement2()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == true (line 139)

    $actual = $this->cI_Cache_file->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == false (line 167)
    // if (!\is_int($data['data'])) == false (line 171)

    $actual = $this->cI_Cache_file->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement1()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == false (line 167)
    // if (!\is_int($data['data'])) == true (line 171)

    $actual = $this->cI_Cache_file->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement2()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data === \FALSE) == true (line 167)

    $actual = $this->cI_Cache_file->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_file->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_file->cache_info($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($this->_cache_path . $id)) == false (line 219)
    // if (\is_array($data)) == false (line 226)

    $actual = $this->cI_Cache_file->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($this->_cache_path . $id)) == false (line 219)
    // if (\is_array($data)) == true (line 226)
    // if (!isset($data['ttl'], $data['time'])) == false (line 230)

    $actual = $this->cI_Cache_file->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata2()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($this->_cache_path . $id)) == false (line 219)
    // if (\is_array($data)) == true (line 226)
    // if (!isset($data['ttl'], $data['time'])) == true (line 230)

    $actual = $this->cI_Cache_file->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata3()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_file($this->_cache_path . $id)) == true (line 219)

    $actual = $this->cI_Cache_file->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_file->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
