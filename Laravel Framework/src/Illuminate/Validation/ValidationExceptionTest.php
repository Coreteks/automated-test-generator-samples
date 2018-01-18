<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\ValidationException;
use Mockery as m;

class ValidationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_validator = null;
/**
* @var mixed
*/
protected $_response = null;
/**
* @var mixed
*/
protected $_errorBag = null;
/**
* @var \Illuminate\Validation\ValidationException
*/
protected $validationException;

public function setUp()
{
    parent::setUp();

    $this->_validator = null;
    $this->_response = null;
    $this->_errorBag = null;
    $this->validationException = new \Illuminate\Validation\ValidationException($this->_validator, $this->_response, $this->_errorBag);
}

public function testWithMessages0()
{
    $messages = [];

    // TODO: Your mock expectations here

    $actual = $this->validationException->withMessages($messages);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->validationException->errors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStatus0()
{
    $status = m::mock('UntypedParameter_status_');

    // TODO: Your mock expectations here

    $actual = $this->validationException->status($status);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testErrorBag0()
{
    $errorBag = m::mock('UntypedParameter_errorBag_');

    // TODO: Your mock expectations here

    $actual = $this->validationException->errorBag($errorBag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirectTo0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->validationException->redirectTo($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->validationException->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
