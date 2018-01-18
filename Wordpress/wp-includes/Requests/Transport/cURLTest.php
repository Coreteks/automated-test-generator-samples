<?php

namespace tests;

use Mockery as m;
use Requests_Transport_cURL;

class Requests_Transport_cURLTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Transport_cURL
*/
protected $requests_Transport_cURL;

public function setUp()
{
    parent::setUp();

    $this->requests_Transport_cURL = new \Requests_Transport_cURL();
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->handle)) == false (line 114)

    $actual = $this->requests_Transport_cURL->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->handle)) == true (line 114)

    $actual = $this->requests_Transport_cURL->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest1()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest2()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest3()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest4()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest5()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest6()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest7()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest8()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest9()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest10()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest11()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest12()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest13()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest14()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest15()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest16()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest17()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest18()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest19()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest20()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest21()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest22()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest23()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest24()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest25()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest26()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest27()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest28()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest29()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest30()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest31()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest32()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest33()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest34()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest35()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest36()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest37()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest38()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest39()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest40()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest41()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest42()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest43()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest44()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest45()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest46()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest47()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == false (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest48()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest49()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest50()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest51()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == false (line 148)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest52()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest53()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest54()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest55()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == false (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest56()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest57()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest58()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest59()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == false (line 149)
    // if (\is_string($options['verify'])) == true (line 153)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest60()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest61()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == false (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest62()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == false (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest63()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 137)
    // if ($options['max_bytes'] !== \false) == true (line 144)
    // if (isset($options['verify'])) == true (line 148)
    // if ($options['verify'] === \false) == true (line 149)
    // if (isset($options['verifyname']) && $options['verifyname'] === \false) == true (line 158)
    // if (\curl_errno($this->handle) === 23 || \curl_errno($this->handle) === 61) == true (line 167)

    $actual = $this->requests_Transport_cURL->request($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple0()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple1()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple2()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple3()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple4()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple5()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple6()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple7()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple8()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple9()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple10()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple11()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple12()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple13()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple14()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple15()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple16()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple17()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple18()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple19()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple20()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple21()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple22()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple23()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple24()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == false (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple25()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple26()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple27()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == false (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple28()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == false (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple29()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == false (line 196)
    // PhpParser\Node\Stmt\Do_ == false (line 220)
    // while ($done = \curl_multi_info_read($multihandle)) == true (line 228)
    // if (!isset($to_process[$key])) == true (line 230)
    // while ($done = \curl_multi_info_read($multihandle)) == false (line 228)
    // if (\CURLE_OK !== $done['result']) == true (line 238)
    // if (!\is_string($responses[$key])) == true (line 259)
    // PhpParser\Node\Stmt\Do_ == false (line 217)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_multiple30()
{
    $requests = m::mock('UntypedParameter_requests_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($requests)) == true (line 196)

    $actual = $this->requests_Transport_cURL->request_multiple($requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_subrequest_handle0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 286)
    // if ($options['max_bytes'] !== \false) == false (line 293)

    $actual = $this->requests_Transport_cURL->get_subrequest_handle($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_subrequest_handle1()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == false (line 286)
    // if ($options['max_bytes'] !== \false) == true (line 293)

    $actual = $this->requests_Transport_cURL->get_subrequest_handle($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_subrequest_handle2()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 286)
    // if ($options['max_bytes'] !== \false) == false (line 293)

    $actual = $this->requests_Transport_cURL->get_subrequest_handle($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_subrequest_handle3()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['filename'] !== \false) == true (line 286)
    // if ($options['max_bytes'] !== \false) == true (line 293)

    $actual = $this->requests_Transport_cURL->get_subrequest_handle($url, $headers, $data, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess_response0()
{
    $response = m::mock('UntypedParameter_response_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['blocking'] === \false) == false (line 403)
    // if ($options['filename'] !== \false) == false (line 408)
    // if (\curl_errno($this->handle)) == false (line 416)

    $actual = $this->requests_Transport_cURL->process_response($response, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testProcess_response1()
{
    $response = m::mock('UntypedParameter_response_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['blocking'] === \false) == false (line 403)
    // if ($options['filename'] !== \false) == false (line 408)
    // if (\curl_errno($this->handle)) == true (line 416)
    // throw new \Requests_Exception($error, 'curlerror', $this->handle) -> exception (line 422)

    $actual = $this->requests_Transport_cURL->process_response($response, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess_response2()
{
    $response = m::mock('UntypedParameter_response_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['blocking'] === \false) == false (line 403)
    // if ($options['filename'] !== \false) == true (line 408)
    // if (\curl_errno($this->handle)) == false (line 416)

    $actual = $this->requests_Transport_cURL->process_response($response, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testProcess_response3()
{
    $response = m::mock('UntypedParameter_response_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['blocking'] === \false) == false (line 403)
    // if ($options['filename'] !== \false) == true (line 408)
    // if (\curl_errno($this->handle)) == true (line 416)
    // throw new \Requests_Exception($error, 'curlerror', $this->handle) -> exception (line 422)

    $actual = $this->requests_Transport_cURL->process_response($response, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess_response4()
{
    $response = m::mock('UntypedParameter_response_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($options['blocking'] === \false) == true (line 403)

    $actual = $this->requests_Transport_cURL->process_response($response, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_headers0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->done_headers) == false (line 441)
    // if ($headers === "\r\n") == false (line 447)

    $actual = $this->requests_Transport_cURL->stream_headers($handle, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_headers1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->done_headers) == false (line 441)
    // if ($headers === "\r\n") == true (line 447)

    $actual = $this->requests_Transport_cURL->stream_headers($handle, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_headers2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->done_headers) == true (line 441)
    // if ($headers === "\r\n") == false (line 447)

    $actual = $this->requests_Transport_cURL->stream_headers($handle, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_headers3()
{
    $handle = m::mock('UntypedParameter_handle_');
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->done_headers) == true (line 441)
    // if ($headers === "\r\n") == true (line 447)

    $actual = $this->requests_Transport_cURL->stream_headers($handle, $headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == false (line 467)
    // if ($this->stream_handle) == false (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == false (line 467)
    // if ($this->stream_handle) == true (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == true (line 467)
    // if ($this->response_bytes === $this->response_byte_limit) == false (line 468)
    // if ($this->response_bytes + $data_length > $this->response_byte_limit) == false (line 473)
    // if ($this->stream_handle) == false (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body3()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == true (line 467)
    // if ($this->response_bytes === $this->response_byte_limit) == false (line 468)
    // if ($this->response_bytes + $data_length > $this->response_byte_limit) == false (line 473)
    // if ($this->stream_handle) == true (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body4()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == true (line 467)
    // if ($this->response_bytes === $this->response_byte_limit) == false (line 468)
    // if ($this->response_bytes + $data_length > $this->response_byte_limit) == true (line 473)
    // if ($this->stream_handle) == false (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body5()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == true (line 467)
    // if ($this->response_bytes === $this->response_byte_limit) == false (line 468)
    // if ($this->response_bytes + $data_length > $this->response_byte_limit) == true (line 473)
    // if ($this->stream_handle) == true (line 480)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStream_body6()
{
    $handle = m::mock('UntypedParameter_handle_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->response_byte_limit) == true (line 467)
    // if ($this->response_bytes === $this->response_byte_limit) == true (line 468)

    $actual = $this->requests_Transport_cURL->stream_body($handle, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest0()
{
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('curl_init') || !\function_exists('curl_exec')) == false (line 528)
    // if (isset($capabilities['ssl']) && $capabilities['ssl']) == false (line 533)

    $actual = $this->requests_Transport_cURL->test($capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest1()
{
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('curl_init') || !\function_exists('curl_exec')) == false (line 528)
    // if (isset($capabilities['ssl']) && $capabilities['ssl']) == true (line 533)
    // if (!(\CURL_VERSION_SSL & $curl_version['features'])) == false (line 535)

    $actual = $this->requests_Transport_cURL->test($capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest2()
{
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('curl_init') || !\function_exists('curl_exec')) == false (line 528)
    // if (isset($capabilities['ssl']) && $capabilities['ssl']) == true (line 533)
    // if (!(\CURL_VERSION_SSL & $curl_version['features'])) == true (line 535)

    $actual = $this->requests_Transport_cURL->test($capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTest3()
{
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('curl_init') || !\function_exists('curl_exec')) == true (line 528)

    $actual = $this->requests_Transport_cURL->test($capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
