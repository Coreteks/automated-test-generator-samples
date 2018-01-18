<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Storage;
use Mockery as m;

class StorageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Storage
*/
protected $storage;

public function setUp()
{
    parent::setUp();

    $this->storage = new \Illuminate\Support\Facades\Storage();
}

public function testFake0()
{
    $disk = m::mock('UntypedParameter_disk_');

    // TODO: Your mock expectations here

    $actual = $this->storage->fake($disk);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersistentFake0()
{
    $disk = m::mock('UntypedParameter_disk_');

    // TODO: Your mock expectations here

    $actual = $this->storage->persistentFake($disk);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
