<?php

namespace tests\Illuminate\Http\Testing;

use Illuminate\Http\Testing\MimeType;
use Mockery as m;

class MimeTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Testing\MimeType
*/
protected $mimeType;

public function setUp()
{
    parent::setUp();

    $this->mimeType = new \Illuminate\Http\Testing\MimeType();
}

public function testFrom0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    $actual = $this->mimeType->from($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $extension = m::mock('UntypedParameter_extension_');

    // TODO: Your mock expectations here

    $actual = $this->mimeType->get($extension);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSearch0()
{
    $mimeType = m::mock('UntypedParameter_mimeType_');

    // TODO: Your mock expectations here

    $actual = $this->mimeType->search($mimeType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
