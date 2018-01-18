<?php

namespace tests\Psy\Exception;

use Mockery as m;
use Psy\Exception\TypeErrorException;

class TypeErrorExceptionTest extends \PHPUnit_Framework_TestCase
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
* @var \Psy\Exception\TypeErrorException
*/
protected $typeErrorException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->typeErrorException = new \Psy\Exception\TypeErrorException($this->_message, $this->_code);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->typeErrorException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromTypeError0()
{
    $e = m::mock(\TypeError::class);

    // TODO: Your mock expectations here

    $actual = $this->typeErrorException->fromTypeError($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
