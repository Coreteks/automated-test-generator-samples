<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\ElasticaFormatter;

class ElasticaFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_index = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \Monolog\Formatter\ElasticaFormatter
*/
protected $elasticaFormatter;

public function setUp()
{
    parent::setUp();

    $this->_index = null;
    $this->_type = null;
    $this->elasticaFormatter = new \Monolog\Formatter\ElasticaFormatter($this->_index, $this->_type);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->elasticaFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIndex0()
{
    // TODO: Your mock expectations here

    $actual = $this->elasticaFormatter->getIndex();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->elasticaFormatter->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
