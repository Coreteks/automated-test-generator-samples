<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\CurlFactory;
use Mockery as m;

class CurlFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_maxHandles = null;
/**
* @var \GuzzleHttp\Handler\CurlFactory
*/
protected $curlFactory;

public function setUp()
{
    parent::setUp();

    $this->_maxHandles = null;
    $this->curlFactory = new \GuzzleHttp\Handler\CurlFactory($this->_maxHandles);
}

public function testCreate0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['curl']['body_as_string'])) == false (line 33)
    // if (isset($options['curl'])) == false (line 48)

    $actual = $this->curlFactory->create($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['curl']['body_as_string'])) == false (line 33)
    // if (isset($options['curl'])) == true (line 48)

    $actual = $this->curlFactory->create($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['curl']['body_as_string'])) == true (line 33)
    // if (isset($options['curl'])) == false (line 48)

    $actual = $this->curlFactory->create($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['curl']['body_as_string'])) == true (line 33)
    // if (isset($options['curl'])) == true (line 48)

    $actual = $this->curlFactory->create($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease0()
{
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->handles) >= $this->maxHandles) == false (line 66)

    $actual = $this->curlFactory->release($easy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRelease1()
{
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->handles) >= $this->maxHandles) == true (line 66)

    $actual = $this->curlFactory->release($easy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish0()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == false (line 97)
    // if (!$easy->response || $easy->errno) == false (line 101)
    // if ($body->isSeekable()) == false (line 110)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish1()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == false (line 97)
    // if (!$easy->response || $easy->errno) == false (line 101)
    // if ($body->isSeekable()) == true (line 110)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish2()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == false (line 97)
    // if (!$easy->response || $easy->errno) == true (line 101)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish3()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == true (line 97)
    // if (!$easy->response || $easy->errno) == false (line 101)
    // if ($body->isSeekable()) == false (line 110)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish4()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == true (line 97)
    // if (!$easy->response || $easy->errno) == false (line 101)
    // if ($body->isSeekable()) == true (line 110)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish5()
{
    $handler = m::mock('UntypedParameter_handler_');
    $easy = m::mock(\GuzzleHttp\Handler\EasyHandle::class);
    $factory = m::mock(\GuzzleHttp\Handler\CurlFactoryInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($easy->options['on_stats'])) == true (line 97)
    // if (!$easy->response || $easy->errno) == true (line 101)

    $actual = $this->curlFactory->finish($handler, $easy, $factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
