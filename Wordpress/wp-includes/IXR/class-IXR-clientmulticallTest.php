<?php

namespace tests;

use IXR_ClientMulticall;
use Mockery as m;

class IXR_ClientMulticallTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_server = null;
/**
* @var mixed
*/
protected $_path = null;
/**
* @var mixed
*/
protected $_port = null;
/**
* @var \IXR_ClientMulticall
*/
protected $iXR_ClientMulticall;

public function setUp()
{
    parent::setUp();

    $this->_server = null;
    $this->_path = null;
    $this->_port = null;
    $this->iXR_ClientMulticall = new \IXR_ClientMulticall($this->_server, $this->_path, $this->_port);
}

public function testIXR_ClientMulticall0()
{
    $server = m::mock('UntypedParameter_server_');
    $path = m::mock('UntypedParameter_path_');
    $port = m::mock('UntypedParameter_port_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_ClientMulticall->IXR_ClientMulticall($server, $path, $port);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCall0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_ClientMulticall->addCall();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_ClientMulticall->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
