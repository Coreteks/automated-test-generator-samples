<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\CurlHandler;
use Mockery as m;

class CurlHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \GuzzleHttp\Handler\CurlHandler
*/
protected $curlHandler;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->curlHandler = new \GuzzleHttp\Handler\CurlHandler($this->_options);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 35)

    $actual = $this->curlHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 35)

    $actual = $this->curlHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
