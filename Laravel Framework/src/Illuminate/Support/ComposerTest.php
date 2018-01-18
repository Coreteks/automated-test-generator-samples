<?php

namespace tests\Illuminate\Support;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;
use Mockery as m;

class ComposerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var mixed
*/
protected $_workingPath = null;
/**
* @var \Illuminate\Support\Composer
*/
protected $composer;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_workingPath = null;
    $this->composer = new \Illuminate\Support\Composer($this->_files, $this->_workingPath);
}

public function testDumpAutoloads0()
{
    $extra = m::mock('UntypedParameter_extra_');

    // TODO: Your mock expectations here

    $actual = $this->composer->dumpAutoloads($extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDumpOptimized0()
{
    // TODO: Your mock expectations here

    $actual = $this->composer->dumpOptimized();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWorkingPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->composer->setWorkingPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
