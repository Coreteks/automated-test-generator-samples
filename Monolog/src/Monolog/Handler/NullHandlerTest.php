<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\NullHandler;

class NullHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var \Monolog\Handler\NullHandler
*/
protected $nullHandler;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->nullHandler = new \Monolog\Handler\NullHandler($this->_level);
}

public function testIsHandling0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->nullHandler->isHandling($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 49)

    $actual = $this->nullHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 49)

    $actual = $this->nullHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
