<?php

namespace tests\Illuminate\Http\Testing;

use Illuminate\Http\Testing\FileFactory;
use Mockery as m;

class FileFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Testing\FileFactory
*/
protected $fileFactory;

public function setUp()
{
    parent::setUp();

    $this->fileFactory = new \Illuminate\Http\Testing\FileFactory();
}

public function testCreate0()
{
    $name = m::mock('UntypedParameter_name_');
    $kilobytes = m::mock('UntypedParameter_kilobytes_');

    // TODO: Your mock expectations here

    $actual = $this->fileFactory->create($name, $kilobytes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    $name = m::mock('UntypedParameter_name_');
    $width = m::mock('UntypedParameter_width_');
    $height = m::mock('UntypedParameter_height_');

    // TODO: Your mock expectations here

    $actual = $this->fileFactory->image($name, $width, $height);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
