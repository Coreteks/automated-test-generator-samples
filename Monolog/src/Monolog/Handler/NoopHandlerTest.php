<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\NoopHandler;

class NoopHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\NoopHandler
*/
protected $noopHandler;

public function setUp()
{
    parent::setUp();

    $this->noopHandler = new \Monolog\Handler\NoopHandler();
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->noopHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->noopHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
