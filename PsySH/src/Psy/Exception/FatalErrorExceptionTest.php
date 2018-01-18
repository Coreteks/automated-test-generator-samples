<?php

namespace tests\Psy\Exception;

use Mockery as m;
use Psy\Exception\FatalErrorException;

class FatalErrorExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var mixed
*/
protected $_severity = null;
/**
* @var mixed
*/
protected $_filename = null;
/**
* @var mixed
*/
protected $_lineno = null;
/**
* @var mixed
*/
protected $_previous = null;
/**
* @var \Psy\Exception\FatalErrorException
*/
protected $fatalErrorException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_severity = null;
    $this->_filename = null;
    $this->_lineno = null;
    $this->_previous = null;
    $this->fatalErrorException = new \Psy\Exception\FatalErrorException($this->_message, $this->_code, $this->_severity, $this->_filename, $this->_lineno, $this->_previous);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->fatalErrorException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
