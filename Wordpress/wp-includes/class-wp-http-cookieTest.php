<?php

namespace tests;

use Mockery as m;
use WP_Http_Cookie;

class WP_Http_CookieTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_requested_url = null;
/**
* @var \WP_Http_Cookie
*/
protected $wP_Http_Cookie;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->_requested_url = null;
    $this->wP_Http_Cookie = new \WP_Http_Cookie($this->_data, $this->_requested_url);
}

public function testTest0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == false (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == false (line 185)
    // if (\substr($url['path'], 0, \strlen($path)) != $path) == false (line 190)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest1()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == false (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == false (line 185)
    // if (\substr($url['path'], 0, \strlen($path)) != $path) == true (line 190)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest2()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == false (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == true (line 185)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest3()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == false (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == true (line 180)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest4()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == true (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == false (line 185)
    // if (\substr($url['path'], 0, \strlen($path)) != $path) == false (line 190)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest5()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == true (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == false (line 185)
    // if (\substr($url['path'], 0, \strlen($path)) != $path) == true (line 190)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest6()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == true (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == false (line 180)
    // if (!empty($port) && !\in_array($url['port'], \explode(',', $port))) == true (line 185)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest7()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == false (line 161)
    // if (\false === \stripos($domain, '.')) == true (line 174)
    // if (\substr($url['host'], -\strlen($domain)) != $domain) == true (line 180)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest8()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == false (line 156)
    // if (isset($this->expires) && \time() > $this->expires) == true (line 161)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest9()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($this->name)) == true (line 156)

    $actual = $this->wP_Http_Cookie->test($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHeaderValue0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->name) || !isset($this->value)) == false (line 205)

    $actual = $this->wP_Http_Cookie->getHeaderValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHeaderValue1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->name) || !isset($this->value)) == true (line 205)

    $actual = $this->wP_Http_Cookie->getHeaderValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFullHeader0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Http_Cookie->getFullHeader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_attributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Http_Cookie->get_attributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
