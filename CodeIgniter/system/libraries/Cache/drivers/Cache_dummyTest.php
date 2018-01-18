<?php

namespace tests;

use CI_Cache_dummy;
use Mockery as m;

class CI_Cache_dummyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_dummy
*/
protected $cI_Cache_dummy;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_dummy = new \CI_Cache_dummy();
}

public function testGet0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->get($id);
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

    $actual = $this->cI_Cache_dummy->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->delete($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->cache_info($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->get_metadata($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_dummy->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
