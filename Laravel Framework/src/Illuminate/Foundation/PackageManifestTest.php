<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\PackageManifest;
use Mockery as m;

class PackageManifestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var mixed
*/
protected $_basePath = null;
/**
* @var mixed
*/
protected $_manifestPath = null;
/**
* @var \Illuminate\Foundation\PackageManifest
*/
protected $packageManifest;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_basePath = null;
    $this->_manifestPath = null;
    $this->packageManifest = new \Illuminate\Foundation\PackageManifest($this->_files, $this->_basePath, $this->_manifestPath);
}

public function testProviders0()
{
    // TODO: Your mock expectations here

    $actual = $this->packageManifest->providers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAliases0()
{
    // TODO: Your mock expectations here

    $actual = $this->packageManifest->aliases();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($path = $this->vendorPath . '/composer/installed.json')) == false (line 113)

    $actual = $this->packageManifest->build();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuild1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($path = $this->vendorPath . '/composer/installed.json')) == true (line 113)

    $actual = $this->packageManifest->build();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
