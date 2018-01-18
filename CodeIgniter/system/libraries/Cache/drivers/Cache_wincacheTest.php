<?php

namespace tests;

use CI_Cache_wincache;
use Mockery as m;

class CI_Cache_wincacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_wincache
*/
protected $cI_Cache_wincache;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_wincache = new \CI_Cache_wincache();
}

public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->get($id);
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

    $actual = $this->cI_Cache_wincache->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->cache_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stored = \wincache_ucache_info(\FALSE, $id)) == false (line 187)

    $actual = $this->cI_Cache_wincache->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stored = \wincache_ucache_info(\FALSE, $id)) == true (line 187)

    $actual = $this->cI_Cache_wincache->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_wincache->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
