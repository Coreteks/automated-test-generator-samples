<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\Client;
use Mockery as m;

class ClientTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_config = [];
/**
* @var \GuzzleHttp\Client
*/
protected $client;

public function setUp()
{
    parent::setUp();

    $this->_config = [];
    $this->client = new \GuzzleHttp\Client($this->_config);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($args) < 1) == false (line 80)

    $actual = $this->client->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($args) < 1) == true (line 80)
    // throw new \InvalidArgumentException('Magic request methods require a URI and optional options array') -> exception (line 81)

    $actual = $this->client->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendAsync0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->client->sendAsync($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->client->send($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequestAsync0()
{
    $method = m::mock('UntypedParameter_method_');
    $uri = m::mock('UntypedParameter_uri_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($body)) == false (line 118)

    $actual = $this->client->requestAsync($method, $uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequestAsync1()
{
    $method = m::mock('UntypedParameter_method_');
    $uri = m::mock('UntypedParameter_uri_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($body)) == true (line 118)

    $actual = $this->client->requestAsync($method, $uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest0()
{
    $method = m::mock('UntypedParameter_method_');
    $uri = m::mock('UntypedParameter_uri_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->client->request($method, $uri, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfig0()
{
    $option = m::mock('UntypedParameter_option_');

    // TODO: Your mock expectations here

    $actual = $this->client->getConfig($option);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
