<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\TagProcessor;

class TagProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_tags = [];
/**
* @var \Monolog\Processor\TagProcessor
*/
protected $tagProcessor;

public function setUp()
{
    parent::setUp();

    $this->_tags = [];
    $this->tagProcessor = new \Monolog\Processor\TagProcessor($this->_tags);
}

public function testAddTags0()
{
    $tags = [];

    // TODO: Your mock expectations here

    $actual = $this->tagProcessor->addTags($tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTags0()
{
    $tags = [];

    // TODO: Your mock expectations here

    $actual = $this->tagProcessor->setTags($tags);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->tagProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
