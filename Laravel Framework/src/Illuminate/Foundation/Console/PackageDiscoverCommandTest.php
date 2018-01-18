<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Mockery as m;

class PackageDiscoverCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\PackageDiscoverCommand
*/
protected $packageDiscoverCommand;

public function setUp()
{
    parent::setUp();

    $this->packageDiscoverCommand = new \Illuminate\Foundation\Console\PackageDiscoverCommand();
}

public function testHandle0()
{
    $manifest = m::mock(\Illuminate\Foundation\PackageManifest::class);

    // TODO: Your mock expectations here

    $actual = $this->packageDiscoverCommand->handle($manifest);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $manifest = m::mock(\Illuminate\Foundation\PackageManifest::class);

    // TODO: Your mock expectations here

    $actual = $this->packageDiscoverCommand->handle($manifest);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
