<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\ChromePHPHandler;

class ChromePHPHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\ChromePHPHandler
*/
protected $chromePHPHandler;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->_bubble = null;
    $this->chromePHPHandler = new \Monolog\Handler\ChromePHPHandler($this->_level, $this->_bubble);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($messages)) == false (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($messages)) == true (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch2()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 81)
    // if (!empty($messages)) == false (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch3()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 81)
    // if (!empty($messages)) == true (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch4()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 81)
    // if (!empty($messages)) == false (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch5()
{
    $records = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 81)
    // if (!empty($messages)) == true (line 87)

    $actual = $this->chromePHPHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
