<?php

namespace tests\Illuminate\Auth\Access;

use Illuminate\Auth\Access\Response;
use Mockery as m;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Illuminate\Auth\Access\Response
*/
protected $response;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->response = new \Illuminate\Auth\Access\Response($this->_message);
}

public function testMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->response->message();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->response->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
