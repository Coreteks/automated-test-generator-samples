<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\FlowdockHandler;

class FlowdockHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_apiToken = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\FlowdockHandler
*/
protected $flowdockHandler;

public function setUp()
{
    parent::setUp();

    $this->_apiToken = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->flowdockHandler = new \Monolog\Handler\FlowdockHandler($this->_apiToken, $this->_level, $this->_bubble);
}

public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatter instanceof \Monolog\Formatter\FlowdockFormatter) == false (line 58)

    $actual = $this->flowdockHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetFormatter1()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$formatter instanceof \Monolog\Formatter\FlowdockFormatter) == true (line 58)
    // throw new \InvalidArgumentException('The FlowdockHandler requires an instance of Monolog\\Formatter\\FlowdockFormatter to function correctly') -> exception (line 59)

    $actual = $this->flowdockHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
