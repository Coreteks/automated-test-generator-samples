<?php

namespace tests;

use IXR_Error;
use Mockery as m;

class IXR_ErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_code = null;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \IXR_Error
*/
protected $iXR_Error;

public function setUp()
{
    parent::setUp();

    $this->_code = null;
    $this->_message = null;
    $this->iXR_Error = new \IXR_Error($this->_code, $this->_message);
}

public function testIXR_Error0()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Error->IXR_Error($code, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Error->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
