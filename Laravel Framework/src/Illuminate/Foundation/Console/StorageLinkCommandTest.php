<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\StorageLinkCommand;
use Mockery as m;

class StorageLinkCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\StorageLinkCommand
*/
protected $storageLinkCommand;

public function setUp()
{
    parent::setUp();

    $this->storageLinkCommand = new \Illuminate\Foundation\Console\StorageLinkCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists(public_path('storage'))) == false (line 30)

    $actual = $this->storageLinkCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists(public_path('storage'))) == true (line 30)

    $actual = $this->storageLinkCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
