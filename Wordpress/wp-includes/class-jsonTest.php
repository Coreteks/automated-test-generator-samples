<?php

namespace tests;

use Mockery as m;
use Services_JSON_Error;

class Services_JSON_ErrorTest extends \PHPUnit_Framework_TestCase
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
protected $_mode = null;
/**
* @var mixed
*/
protected $_options = null;
/**
* @var mixed
*/
protected $_userinfo = null;
/**
* @var \Services_JSON_Error
*/
protected $services_JSON_Error;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_mode = null;
    $this->_options = null;
    $this->_userinfo = null;
    $this->services_JSON_Error = new \Services_JSON_Error($this->_message, $this->_code, $this->_mode, $this->_options, $this->_userinfo);
}

public function testServices_JSON_Error0()
{
    $message = m::mock('UntypedParameter_message_');
    $code = m::mock('UntypedParameter_code_');
    $mode = m::mock('UntypedParameter_mode_');
    $options = m::mock('UntypedParameter_options_');
    $userinfo = m::mock('UntypedParameter_userinfo_');

    // TODO: Your mock expectations here

    $actual = $this->services_JSON_Error->Services_JSON_Error($message, $code, $mode, $options, $userinfo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
