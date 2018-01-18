<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\KeyGenerateCommand;
use Mockery as m;

class KeyGenerateCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\KeyGenerateCommand
*/
protected $keyGenerateCommand;

public function setUp()
{
    parent::setUp();

    $this->keyGenerateCommand = new \Illuminate\Foundation\Console\KeyGenerateCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->option('show')) == false (line 38)
    // if (!$this->setKeyInEnvironmentFile($key)) == false (line 45)

    $actual = $this->keyGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->option('show')) == false (line 38)
    // if (!$this->setKeyInEnvironmentFile($key)) == true (line 45)

    $actual = $this->keyGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->option('show')) == true (line 38)

    $actual = $this->keyGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
