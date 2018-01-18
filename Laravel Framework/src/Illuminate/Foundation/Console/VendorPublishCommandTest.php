<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\VendorPublishCommand;
use Mockery as m;

class VendorPublishCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\VendorPublishCommand
*/
protected $vendorPublishCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->vendorPublishCommand = new \Illuminate\Foundation\Console\VendorPublishCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->vendorPublishCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    $actual = $this->vendorPublishCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
