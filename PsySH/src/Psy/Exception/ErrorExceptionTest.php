<?php

namespace tests\Psy\Exception;

use Mockery as m;
use Psy\Exception\ErrorException;

class ErrorExceptionTest extends \PHPUnit_Framework_TestCase
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
* @var \Psy\Exception\ErrorException
*/
protected $errorException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_severity = null;
    $this->_filename = null;
    $this->_lineno = null;
    $this->_previous = null;
    $this->errorException = new \Psy\Exception\ErrorException($this->_message, $this->_code, $this->_severity, $this->_filename, $this->_lineno, $this->_previous);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->errorException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \self
 */
public function testThrowException0()
{
    $errno = m::mock('UntypedParameter_errno_');
    $errstr = m::mock('UntypedParameter_errstr_');
    $errfile = m::mock('UntypedParameter_errfile_');
    $errline = m::mock('UntypedParameter_errline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new self($errstr, 0, $errno, $errfile, $errline) -> exception (line 100)

    $actual = $this->errorException->throwException($errno, $errstr, $errfile, $errline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromError0()
{
    $e = m::mock(\Error::class);

    // TODO: Your mock expectations here

    $actual = $this->errorException->fromError($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
