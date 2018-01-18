<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\ViewClearCommand;
use Mockery as m;

class ViewClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\ViewClearCommand
*/
protected $viewClearCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->viewClearCommand = new \Illuminate\Foundation\Console\ViewClearCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$path) == false (line 54)

    $actual = $this->viewClearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$path) == false (line 54)

    $actual = $this->viewClearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$path) == true (line 54)
    // throw new \RuntimeException('View path not found.') -> exception (line 55)

    $actual = $this->viewClearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
