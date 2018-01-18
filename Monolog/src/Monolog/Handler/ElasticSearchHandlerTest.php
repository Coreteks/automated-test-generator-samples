<?php

namespace tests\Monolog\Handler;

use Elastica\Client;
use Mockery as m;
use Monolog\Handler\ElasticSearchHandler;

class ElasticSearchHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_client;
/**
* @var array
*/
protected $_options = [];
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\ElasticSearchHandler
*/
protected $elasticSearchHandler;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\Elastica\Client::class);
    $this->_options = [];
    $this->_level = null;
    $this->_bubble = null;
    $this->elasticSearchHandler = new \Monolog\Handler\ElasticSearchHandler($this->_client, $this->_options, $this->_level, $this->_bubble);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter instanceof \Monolog\Formatter\ElasticaFormatter) == false (line 81)
    // throw new \InvalidArgumentException('ElasticSearchHandler is only compatible with ElasticaFormatter') -> exception (line 84)

    $actual = $this->elasticSearchHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter1()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($formatter instanceof \Monolog\Formatter\ElasticaFormatter) == true (line 81)

    $actual = $this->elasticSearchHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->elasticSearchHandler->getOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->elasticSearchHandler->handleBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
