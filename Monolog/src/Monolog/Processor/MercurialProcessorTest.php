<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\MercurialProcessor;

class MercurialProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var \Monolog\Processor\MercurialProcessor
*/
protected $mercurialProcessor;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->mercurialProcessor = new \Monolog\Processor\MercurialProcessor($this->_level);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 34)

    $actual = $this->mercurialProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 34)

    $actual = $this->mercurialProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
