<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\UidProcessor;

class UidProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_length = null;
/**
* @var \Monolog\Processor\UidProcessor
*/
protected $uidProcessor;

public function setUp()
{
    parent::setUp();

    $this->_length = null;
    $this->uidProcessor = new \Monolog\Processor\UidProcessor($this->_length);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->uidProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUid0()
{
    // TODO: Your mock expectations here

    $actual = $this->uidProcessor->getUid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
