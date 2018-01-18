<?php

namespace tests;

use IXR_Server;
use Mockery as m;

class IXR_ServerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_callbacks = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_wait = null;
/**
* @var \IXR_Server
*/
protected $iXR_Server;

public function setUp()
{
    parent::setUp();

    $this->_callbacks = null;
    $this->_data = null;
    $this->_wait = null;
    $this->iXR_Server = new \IXR_Server($this->_callbacks, $this->_data, $this->_wait);
}

public function testIXR_Server0()
{
    $callbacks = m::mock('UntypedParameter_callbacks_');
    $data = m::mock('UntypedParameter_data_');
    $wait = m::mock('UntypedParameter_wait_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->IXR_Server($callbacks, $data, $wait);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe3()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe4()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe5()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe6()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe7()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == false (line 40)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe8()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe9()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe10()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe11()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe12()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe13()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe14()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe15()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == false (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe16()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe17()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe18()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe19()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == false (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe20()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe21()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == false (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe22()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == false (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe23()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == false (line 41)
    // if (empty($HTTP_RAW_POST_DATA)) == true (line 51)
    // if (!$this->message->parse()) == true (line 59)
    // if ($this->message->messageType != 'methodCall') == true (line 62)
    // if (\is_a($result, 'IXR_Error')) == true (line 68)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe24()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == true (line 41)
    // if (\function_exists('status_header')) == false (line 42)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServe25()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$data) == true (line 40)
    // if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] !== 'POST') == true (line 41)
    // if (\function_exists('status_header')) == true (line 42)

    $actual = $this->iXR_Server->serve($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == false (line 118)
    // if (!\function_exists($method)) == false (line 122)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall1()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == false (line 118)
    // if (!\function_exists($method)) == true (line 122)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall2()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == true (line 118)
    // if (!\is_callable(array($method[0], $method[1]))) == false (line 119)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall3()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == true (line 118)
    // if (!\is_callable(array($method[0], $method[1]))) == true (line 119)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall4()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == true (line 107)
    // if (!\method_exists($this, $method)) == false (line 110)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall5()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == false (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == true (line 107)
    // if (!\method_exists($this, $method)) == true (line 110)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall6()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == false (line 118)
    // if (!\function_exists($method)) == false (line 122)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall7()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == false (line 118)
    // if (!\function_exists($method)) == true (line 122)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall8()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == true (line 118)
    // if (!\is_callable(array($method[0], $method[1]))) == false (line 119)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall9()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == false (line 107)
    // if (\is_array($method)) == true (line 118)
    // if (!\is_callable(array($method[0], $method[1]))) == true (line 119)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall10()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == true (line 107)
    // if (!\method_exists($this, $method)) == false (line 110)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall11()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == false (line 95)
    // if (\count($args) == 1) == true (line 101)
    // if (\is_string($method) && \substr($method, 0, 5) == 'this:') == true (line 107)
    // if (!\method_exists($this, $method)) == true (line 110)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall12()
{
    $methodname = m::mock('UntypedParameter_methodname_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasMethod($methodname)) == true (line 95)

    $actual = $this->iXR_Server->call($methodname, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $error = m::mock('UntypedParameter_error_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message && !\is_object($error)) == false (line 135)

    $actual = $this->iXR_Server->error($error, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    $error = m::mock('UntypedParameter_error_');
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message && !\is_object($error)) == true (line 135)

    $actual = $this->iXR_Server->error($error, $message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput0()
{
    $xml = m::mock('UntypedParameter_xml_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($charset) == false (line 144)
    // if ($charset) == false (line 150)

    $actual = $this->iXR_Server->output($xml);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput1()
{
    $xml = m::mock('UntypedParameter_xml_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($charset) == false (line 144)
    // if ($charset) == true (line 150)

    $actual = $this->iXR_Server->output($xml);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput2()
{
    $xml = m::mock('UntypedParameter_xml_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($charset) == true (line 144)
    // if ($charset) == false (line 150)

    $actual = $this->iXR_Server->output($xml);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOutput3()
{
    $xml = m::mock('UntypedParameter_xml_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($charset) == true (line 144)
    // if ($charset) == true (line 150)

    $actual = $this->iXR_Server->output($xml);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMethod0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->hasMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCapabilities0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->setCapabilities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCapabilities0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->getCapabilities($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCallbacks0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->setCallbacks();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListMethods0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->listMethods($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiCall0()
{
    $methodcalls = m::mock('UntypedParameter_methodcalls_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Server->multiCall($methodcalls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiCall1()
{
    $methodcalls = m::mock('UntypedParameter_methodcalls_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method == 'system.multicall') == false (line 209)
    // if (\is_a($result, 'IXR_Error')) == false (line 214)

    $actual = $this->iXR_Server->multiCall($methodcalls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiCall2()
{
    $methodcalls = m::mock('UntypedParameter_methodcalls_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method == 'system.multicall') == false (line 209)
    // if (\is_a($result, 'IXR_Error')) == true (line 214)

    $actual = $this->iXR_Server->multiCall($methodcalls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiCall3()
{
    $methodcalls = m::mock('UntypedParameter_methodcalls_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method == 'system.multicall') == true (line 209)
    // if (\is_a($result, 'IXR_Error')) == false (line 214)

    $actual = $this->iXR_Server->multiCall($methodcalls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMultiCall4()
{
    $methodcalls = m::mock('UntypedParameter_methodcalls_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method == 'system.multicall') == true (line 209)
    // if (\is_a($result, 'IXR_Error')) == true (line 214)

    $actual = $this->iXR_Server->multiCall($methodcalls);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
