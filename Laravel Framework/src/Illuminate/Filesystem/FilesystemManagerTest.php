<?php

namespace tests\Illuminate\Filesystem;

use Illuminate\Filesystem\FilesystemManager;
use Mockery as m;

class FilesystemManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Filesystem\FilesystemManager
*/
protected $filesystemManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->filesystemManager = new \Illuminate\Filesystem\FilesystemManager($this->_app);
}

public function testDrive0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->drive($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisk0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->disk($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCloud0()
{
    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->cloud();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateLocalDriver0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->createLocalDriver($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateFtpDriver0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->createFtpDriver($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateS3Driver0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->createS3Driver($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateRackspaceDriver0()
{
    $config = [];

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->createRackspaceDriver($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $name = m::mock('UntypedParameter_name_');
    $disk = m::mock('UntypedParameter_disk_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->set($name, $disk);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultCloudDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->getDefaultCloudDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->extend($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->filesystemManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
