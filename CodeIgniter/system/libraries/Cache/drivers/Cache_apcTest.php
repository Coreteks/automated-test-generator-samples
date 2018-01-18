<?php

namespace tests;

use CI_Cache_apc;
use Mockery as m;

class CI_Cache_apcTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_apc
*/
protected $cI_Cache_apc;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_apc = new \CI_Cache_apc();
}

public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->get($id);
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

    $actual = $this->cI_Cache_apc->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->cache_info($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cache_info) or empty($cache_info['cache_list'])) == false (line 179)

    $actual = $this->cI_Cache_apc->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cache_info) or empty($cache_info['cache_list'])) == false (line 179)
    // if ($entry['info'] !== $id) == false (line 186)

    $actual = $this->cI_Cache_apc->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata2()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cache_info) or empty($cache_info['cache_list'])) == false (line 179)
    // if ($entry['info'] !== $id) == true (line 186)

    $actual = $this->cI_Cache_apc->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata3()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cache_info) or empty($cache_info['cache_list'])) == true (line 179)

    $actual = $this->cI_Cache_apc->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_apc->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
