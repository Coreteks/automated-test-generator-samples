<?php

namespace tests\Illuminate\Auth\Console;

use Illuminate\Auth\Console\AuthMakeCommand;
use Mockery as m;

class AuthMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Auth\Console\AuthMakeCommand
*/
protected $authMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->authMakeCommand = new \Illuminate\Auth\Console\AuthMakeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->option('views')) == false (line 53)

    $actual = $this->authMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->option('views')) == true (line 53)

    $actual = $this->authMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
