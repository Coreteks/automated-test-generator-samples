<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\GitProcessor;

class GitProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var \Monolog\Processor\GitProcessor
*/
protected $gitProcessor;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->gitProcessor = new \Monolog\Processor\GitProcessor($this->_level);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 35)

    $actual = $this->gitProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 35)

    $actual = $this->gitProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
