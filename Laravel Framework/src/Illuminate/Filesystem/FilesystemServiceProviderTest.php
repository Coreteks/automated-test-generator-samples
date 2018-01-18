<?php

namespace tests\Illuminate\Filesystem;

use Illuminate\Filesystem\FilesystemServiceProvider;
use Mockery as m;

class FilesystemServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Filesystem\FilesystemServiceProvider
*/
protected $filesystemServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->filesystemServiceProvider = new \Illuminate\Filesystem\FilesystemServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->filesystemServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
