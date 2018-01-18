<?php

namespace tests;

use Mockery as m;
use SimplePie_Cache_Memcache;

class SimplePie_Cache_MemcacheTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_location = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \SimplePie_Cache_Memcache
*/
protected $simplePie_Cache_Memcache;

public function setUp()
{
    parent::setUp();

    $this->_location = null;
    $this->_name = null;
    $this->_type = null;
    $this->simplePie_Cache_Memcache = new \SimplePie_Cache_Memcache($this->_location, $this->_name, $this->_type);
}

public function testSave0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \SimplePie) == false (line 116)

    $actual = $this->simplePie_Cache_Memcache->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \SimplePie) == true (line 116)

    $actual = $this->simplePie_Cache_Memcache->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == false (line 132)

    $actual = $this->simplePie_Cache_Memcache->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == true (line 132)

    $actual = $this->simplePie_Cache_Memcache->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == false (line 148)

    $actual = $this->simplePie_Cache_Memcache->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == true (line 148)

    $actual = $this->simplePie_Cache_Memcache->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == false (line 166)

    $actual = $this->simplePie_Cache_Memcache->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data !== \false) == true (line 166)

    $actual = $this->simplePie_Cache_Memcache->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Cache_Memcache->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
