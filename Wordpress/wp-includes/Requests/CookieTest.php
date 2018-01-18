<?php

namespace tests;

use Mockery as m;
use Requests_Cookie;

class Requests_CookieTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var mixed
*/
protected $_attributes = null;
/**
* @var mixed
*/
protected $_flags = null;
/**
* @var mixed
*/
protected $_reference_time = null;
/**
* @var \Requests_Cookie
*/
protected $requests_Cookie;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_value = null;
    $this->_attributes = null;
    $this->_flags = null;
    $this->_reference_time = null;
    $this->requests_Cookie = new \Requests_Cookie($this->_name, $this->_value, $this->_attributes, $this->_flags, $this->_reference_time);
}

public function testIs_expired0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->attributes['max-age'])) == false (line 100)
    // if (isset($this->attributes['expires'])) == false (line 105)

    $actual = $this->requests_Cookie->is_expired();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_expired1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->attributes['max-age'])) == false (line 100)
    // if (isset($this->attributes['expires'])) == true (line 105)

    $actual = $this->requests_Cookie->is_expired();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_expired2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->attributes['max-age'])) == true (line 100)

    $actual = $this->requests_Cookie->is_expired();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri_matches0()
{
    $uri = m::mock(\Requests_IRI::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->domain_matches($uri->host)) == false (line 120)
    // if (!$this->path_matches($uri->path)) == false (line 124)

    $actual = $this->requests_Cookie->uri_matches($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri_matches1()
{
    $uri = m::mock(\Requests_IRI::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->domain_matches($uri->host)) == false (line 120)
    // if (!$this->path_matches($uri->path)) == true (line 124)

    $actual = $this->requests_Cookie->uri_matches($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri_matches2()
{
    $uri = m::mock(\Requests_IRI::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->domain_matches($uri->host)) == true (line 120)

    $actual = $this->requests_Cookie->uri_matches($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == false (line 145)
    // if ($this->flags['host-only'] === \true) == false (line 152)
    // if (\strlen($string) <= \strlen($domain_string)) == false (line 156)
    // if (\substr($string, -1 * \strlen($domain_string)) !== $domain_string) == false (line 162)
    // if (\substr($prefix, -1) !== '.') == false (line 168)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == false (line 145)
    // if ($this->flags['host-only'] === \true) == false (line 152)
    // if (\strlen($string) <= \strlen($domain_string)) == false (line 156)
    // if (\substr($string, -1 * \strlen($domain_string)) !== $domain_string) == false (line 162)
    // if (\substr($prefix, -1) !== '.') == true (line 168)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == false (line 145)
    // if ($this->flags['host-only'] === \true) == false (line 152)
    // if (\strlen($string) <= \strlen($domain_string)) == false (line 156)
    // if (\substr($string, -1 * \strlen($domain_string)) !== $domain_string) == true (line 162)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == false (line 145)
    // if ($this->flags['host-only'] === \true) == false (line 152)
    // if (\strlen($string) <= \strlen($domain_string)) == true (line 156)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches4()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == false (line 145)
    // if ($this->flags['host-only'] === \true) == true (line 152)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches5()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == false (line 138)
    // if ($domain_string === $string) == true (line 145)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDomain_matches6()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->attributes['domain'])) == true (line 138)

    $actual = $this->requests_Cookie->domain_matches($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches0()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == false (line 205)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches1()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == false (line 206)
    // if (\substr($request_path, \strlen($cookie_path), 1) === '/') == false (line 212)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches2()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == false (line 206)
    // if (\substr($request_path, \strlen($cookie_path), 1) === '/') == true (line 212)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches3()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == true (line 206)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches4()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == true (line 200)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches5()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == false (line 187)
    // if (!isset($this->attributes['path'])) == true (line 192)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches6()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == false (line 205)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches7()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == false (line 206)
    // if (\substr($request_path, \strlen($cookie_path), 1) === '/') == false (line 212)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches8()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == false (line 206)
    // if (\substr($request_path, \strlen($cookie_path), 1) === '/') == true (line 212)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches9()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == false (line 200)
    // if (\strlen($request_path) > \strlen($cookie_path) && \substr($request_path, 0, \strlen($cookie_path)) === $cookie_path) == true (line 205)
    // if (\substr($cookie_path, -1) === '/') == true (line 206)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches10()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == false (line 192)
    // if ($cookie_path === $request_path) == true (line 200)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath_matches11()
{
    $request_path = m::mock('UntypedParameter_request_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($request_path)) == true (line 187)
    // if (!isset($this->attributes['path'])) == true (line 192)

    $actual = $this->requests_Cookie->path_matches($request_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->normalize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === \null) == false (line 232)
    // if ($value !== $orig_value) == false (line 237)

    $actual = $this->requests_Cookie->normalize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === \null) == false (line 232)
    // if ($value !== $orig_value) == true (line 237)

    $actual = $this->requests_Cookie->normalize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === \null) == true (line 232)

    $actual = $this->requests_Cookie->normalize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_for_header0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->format_for_header();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatForHeader0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->formatForHeader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_for_set_cookie0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->attributes)) == false (line 335)

    $actual = $this->requests_Cookie->format_for_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_for_set_cookie1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->attributes)) == true (line 335)

    $actual = $this->requests_Cookie->format_for_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_for_set_cookie2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->attributes)) == true (line 335)
    // if (\is_numeric($key)) == false (line 339)

    $actual = $this->requests_Cookie->format_for_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_for_set_cookie3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->attributes)) == true (line 335)
    // if (\is_numeric($key)) == true (line 339)

    $actual = $this->requests_Cookie->format_for_set_cookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatForSetCookie0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->formatForSetCookie();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == false (line 389)
    // if (!empty($parts)) == false (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == false (line 389)
    // if (!empty($parts)) == true (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == false (line 389)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == false (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == false (line 389)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == true (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == true (line 389)
    // if (!empty($parts)) == false (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == true (line 389)
    // if (!empty($parts)) == true (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == true (line 389)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == false (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == false (line 386)
    // if (\strpos($kvparts, '=') === \false) == true (line 389)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == true (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse8()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == true (line 386)
    // if (!empty($parts)) == false (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse9()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == true (line 386)
    // if (!empty($parts)) == true (line 407)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse10()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == true (line 386)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == false (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse11()
{
    $string = m::mock('UntypedParameter_string_');
    $name = m::mock('UntypedParameter_name_');
    $reference_time = m::mock('UntypedParameter_reference_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($name)) == true (line 386)
    // if (!empty($parts)) == true (line 407)
    // if (\strpos($part, '=') === \false) == true (line 409)

    $actual = $this->requests_Cookie->parse($string, $name, $reference_time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers0()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers1()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == false (line 454)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers2()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == false (line 454)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers3()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == false (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers4()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == false (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers5()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == true (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers6()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == true (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers7()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == true (line 458)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers8()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == false (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == true (line 458)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers9()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == false (line 454)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers10()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == false (line 454)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers11()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == false (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers12()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == false (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers13()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == true (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers14()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == false (line 458)
    // if (\substr_count($path, '/') === 1) == true (line 464)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers15()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == true (line 458)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == false (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers16()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == false (line 436)
    // if (empty($parsed->attributes['domain']) && !empty($origin)) == true (line 445)
    // if (!$path_is_valid && !empty($origin)) == true (line 454)
    // if (\substr($path, 0, 1) !== '/') == true (line 458)
    // if (!empty($origin) && !$parsed->domain_matches($origin->host)) == true (line 480)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse_from_headers17()
{
    $headers = m::mock(\Requests_Response_Headers::class);
    $origin = m::mock(\Requests_IRI::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($cookie_headers)) == true (line 436)

    $actual = $this->requests_Cookie->parse_from_headers($headers, $origin, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseFromHeaders0()
{
    $headers = m::mock(\Requests_Response_Headers::class);

    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie->parseFromHeaders($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
