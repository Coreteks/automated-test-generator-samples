<?php

namespace tests\Psy\Exception;

use Mockery as m;
use Psy\Exception\ParseErrorException;

class ParseErrorExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_line = null;
/**
* @var \Psy\Exception\ParseErrorException
*/
protected $parseErrorException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_line = null;
    $this->parseErrorException = new \Psy\Exception\ParseErrorException($this->_message, $this->_line);
}

public function testFromParseError0()
{
    $e = m::mock(\PhpParser\Error::class);

    // TODO: Your mock expectations here

    $actual = $this->parseErrorException->fromParseError($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
