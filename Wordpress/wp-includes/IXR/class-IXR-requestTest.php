<?php

namespace tests;

use IXR_Request;
use Mockery as m;

class IXR_RequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_method = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \IXR_Request
*/
protected $iXR_Request;

public function setUp()
{
    parent::setUp();

    $this->_method = null;
    $this->_args = null;
    $this->iXR_Request = new \IXR_Request($this->_method, $this->_args);
}

public function testIXR_Request0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Request->IXR_Request($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLength0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Request->getLength();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Request->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
