<?php

namespace tests;

use Mockery as m;
use WP_Feed_Cache_Transient;

class WP_Feed_Cache_TransientTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_location = null;
/**
* @var mixed
*/
protected $_filename = null;
/**
* @var mixed
*/
protected $_extension = null;
/**
* @var \WP_Feed_Cache_Transient
*/
protected $wP_Feed_Cache_Transient;

public function setUp()
{
    parent::setUp();

    $this->_location = null;
    $this->_filename = null;
    $this->_extension = null;
    $this->wP_Feed_Cache_Transient = new \WP_Feed_Cache_Transient($this->_location, $this->_filename, $this->_extension);
}

public function testSave0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \SimplePie) == false (line 78)

    $actual = $this->wP_Feed_Cache_Transient->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \SimplePie) == true (line 78)

    $actual = $this->wP_Feed_Cache_Transient->save($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Feed_Cache_Transient->load();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMtime0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Feed_Cache_Transient->mtime();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Feed_Cache_Transient->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnlink0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Feed_Cache_Transient->unlink();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
