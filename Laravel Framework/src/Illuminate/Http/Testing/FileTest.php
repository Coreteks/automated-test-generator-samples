<?php

namespace tests\Illuminate\Http\Testing;

use Illuminate\Http\Testing\File;
use Mockery as m;

class FileTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_tempFile = null;
/**
* @var \Illuminate\Http\Testing\File
*/
protected $file;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_tempFile = null;
    $this->file = new \Illuminate\Http\Testing\File($this->_name, $this->_tempFile);
}

public function testCreate0()
{
    $name = m::mock('UntypedParameter_name_');
    $kilobytes = m::mock('UntypedParameter_kilobytes_');

    // TODO: Your mock expectations here

    $actual = $this->file->create($name, $kilobytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    $name = m::mock('UntypedParameter_name_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');

    // TODO: Your mock expectations here

    $actual = $this->file->image($name, $width, $height);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSize0()
{
    $kilobytes = m::mock('UntypedParameter_kilobytes_');

    // TODO: Your mock expectations here

    $actual = $this->file->size($kilobytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSize0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->getSize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMimeType0()
{
    // TODO: Your mock expectations here

    $actual = $this->file->getMimeType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
