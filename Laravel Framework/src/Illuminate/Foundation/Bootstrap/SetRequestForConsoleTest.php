<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\SetRequestForConsole;
use Mockery as m;

class SetRequestForConsoleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\SetRequestForConsole
*/
protected $setRequestForConsole;

public function setUp()
{
    parent::setUp();

    $this->setRequestForConsole = new \Illuminate\Foundation\Bootstrap\SetRequestForConsole();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($components['path'])) == false (line 24)

    $actual = $this->setRequestForConsole->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($components['path'])) == true (line 24)

    $actual = $this->setRequestForConsole->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
