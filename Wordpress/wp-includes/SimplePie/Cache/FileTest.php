<?php

namespace tests;

use Mockery as m;
use SimplePie_Cache_File;

class SimplePie_Cache_FileTest extends \PHPUnit_Framework_TestCase
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
* @var \SimplePie_Cache_File
*/
protected $simplePie_Cache_File;

public function setUp()
{
    parent::setUp();

    $this->_location = null;
    $this->_name = null;
    $this->_type = null;
    $this->simplePie_Cache_File = new \SimplePie_Cache_File($this->_location, $this->_name, $this->_type);
}

public function testSave0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name) && \is_writeable($this->name) || \file_exists($this->location) && \is_writeable($this->location)) == false (line 105)

    $actual = $this->simplePie_Cache_File->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name) && \is_writeable($this->name) || \file_exists($this->location) && \is_writeable($this->location)) == true (line 105)
    // if ($data instanceof \SimplePie) == false (line 107)

    $actual = $this->simplePie_Cache_File->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name) && \is_writeable($this->name) || \file_exists($this->location) && \is_writeable($this->location)) == true (line 105)
    // if ($data instanceof \SimplePie) == true (line 107)

    $actual = $this->simplePie_Cache_File->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name) && \is_readable($this->name)) == false (line 125)

    $actual = $this->simplePie_Cache_File->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name) && \is_readable($this->name)) == true (line 125)

    $actual = $this->simplePie_Cache_File->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == false (line 139)

    $actual = $this->simplePie_Cache_File->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == true (line 139)

    $actual = $this->simplePie_Cache_File->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == false (line 153)

    $actual = $this->simplePie_Cache_File->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == true (line 153)

    $actual = $this->simplePie_Cache_File->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == false (line 167)

    $actual = $this->simplePie_Cache_File->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\file_exists($this->name)) == true (line 167)

    $actual = $this->simplePie_Cache_File->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
