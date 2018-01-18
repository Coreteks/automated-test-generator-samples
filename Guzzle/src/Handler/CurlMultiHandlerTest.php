<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\CurlMultiHandler;
use Mockery as m;

class CurlMultiHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \GuzzleHttp\Handler\CurlMultiHandler
*/
protected $curlMultiHandler;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->curlMultiHandler = new \GuzzleHttp\Handler\CurlMultiHandler($this->_options);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === '_mh') == false (line 46)
    // throw new \BadMethodCallException() -> exception (line 50)

    $actual = $this->curlMultiHandler->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === '_mh') == true (line 46)

    $actual = $this->curlMultiHandler->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_mh)) == false (line 55)

    $actual = $this->curlMultiHandler->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_mh)) == true (line 55)

    $actual = $this->curlMultiHandler->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->curlMultiHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == false (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == false (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == false (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == false (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == false (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == false (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == false (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == false (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == true (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == true (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == false (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == true (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTick15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->delays) == true (line 84)
    // if ($currentTime >= $delay) == true (line 87)
    // if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) == true (line 100)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == true (line 108)
    // while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) == false (line 108)

    $actual = $this->curlMultiHandler->tick();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->handles || !$queue->isEmpty()) == false (line 120)

    $actual = $this->curlMultiHandler->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->handles || !$queue->isEmpty()) == true (line 120)
    // if (!$this->active && $this->delays) == false (line 122)
    // while ($this->handles || !$queue->isEmpty()) == false (line 120)

    $actual = $this->curlMultiHandler->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($this->handles || !$queue->isEmpty()) == true (line 120)
    // if (!$this->active && $this->delays) == true (line 122)
    // while ($this->handles || !$queue->isEmpty()) == false (line 120)

    $actual = $this->curlMultiHandler->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
