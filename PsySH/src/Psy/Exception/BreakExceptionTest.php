<?php

namespace tests\Psy\Exception;

use Exception;
use Mockery as m;
use Psy\Exception\BreakException;

class BreakExceptionTest extends \PHPUnit_Framework_TestCase
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
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var \Psy\Exception\BreakException
*/
protected $breakException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_previous = m::mock(\Exception::class);
    $this->breakException = new \Psy\Exception\BreakException($this->_message, $this->_code, $this->_previous);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->breakException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \self
 */
public function testExitShell0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new self('Goodbye') -> exception (line 49)

    $actual = $this->breakException->exitShell();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
