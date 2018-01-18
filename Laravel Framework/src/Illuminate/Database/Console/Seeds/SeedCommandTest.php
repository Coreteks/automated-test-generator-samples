<?php

namespace tests\Illuminate\Database\Console\Seeds;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\Console\Seeds\SeedCommand;
use Mockery as m;

class SeedCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_resolver;
/**
* @var \Illuminate\Database\Console\Seeds\SeedCommand
*/
protected $seedCommand;

public function setUp()
{
    parent::setUp();

    $this->_resolver = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->seedCommand = new \Illuminate\Database\Console\Seeds\SeedCommand($this->_resolver);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 56)

    $actual = $this->seedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 56)

    $actual = $this->seedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
