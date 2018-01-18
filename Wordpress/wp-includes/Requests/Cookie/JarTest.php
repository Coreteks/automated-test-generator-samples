<?php

namespace tests;

use Mockery as m;
use Requests_Cookie_Jar;

class Requests_Cookie_JarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_cookies = null;
/**
* @var \Requests_Cookie_Jar
*/
protected $requests_Cookie_Jar;

public function setUp()
{
    parent::setUp();

    $this->_cookies = null;
    $this->requests_Cookie_Jar = new \Requests_Cookie_Jar($this->_cookies);
}

public function testNormalize_cookie0()
{
    $cookie = m::mock('UntypedParameter_cookie_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie instanceof \Requests_Cookie) == false (line 39)

    $actual = $this->requests_Cookie_Jar->normalize_cookie($cookie, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalize_cookie1()
{
    $cookie = m::mock('UntypedParameter_cookie_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cookie instanceof \Requests_Cookie) == true (line 39)

    $actual = $this->requests_Cookie_Jar->normalize_cookie($cookie, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeCookie0()
{
    $cookie = m::mock('UntypedParameter_cookie_');
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie_Jar->normalizeCookie($cookie, $key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie_Jar->offsetExists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cookies[$key])) == false (line 74)

    $actual = $this->requests_Cookie_Jar->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->cookies[$key])) == true (line 74)

    $actual = $this->requests_Cookie_Jar->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == false (line 90)

    $actual = $this->requests_Cookie_Jar->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testOffsetSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == true (line 90)
    // throw new \Requests_Exception('Object is a dictionary, not a list', 'invalidset') -> exception (line 91)

    $actual = $this->requests_Cookie_Jar->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie_Jar->offsetUnset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie_Jar->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $hooks = m::mock(\Requests_Hooker::class);

    // TODO: Your mock expectations here

    $actual = $this->requests_Cookie_Jar->register($hooks);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request0()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 137)
    // if (!empty($this->cookies)) == false (line 141)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request1()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 137)
    // if (!empty($this->cookies)) == true (line 141)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request2()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == false (line 147)
    // if ($cookie->domain_matches($url->host)) == false (line 151)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request3()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == false (line 147)
    // if ($cookie->domain_matches($url->host)) == true (line 151)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request4()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == true (line 147)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request5()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 137)
    // if (!empty($this->cookies)) == false (line 141)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request6()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 137)
    // if (!empty($this->cookies)) == true (line 141)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request7()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == false (line 147)
    // if ($cookie->domain_matches($url->host)) == false (line 151)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request8()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == false (line 147)
    // if ($cookie->domain_matches($url->host)) == true (line 151)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_request9()
{
    $url = m::mock('UntypedParameter_url_');
    $headers = m::mock('UntypedParameter_headers_');
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 137)
    // if (!empty($this->cookies)) == true (line 141)
    // if ($cookie->is_expired()) == true (line 147)

    $actual = $this->requests_Cookie_Jar->before_request($url, $headers, $data, $type, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_redirect_check0()
{
    $return = m::mock(\Requests_Response::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == false (line 167)

    $actual = $this->requests_Cookie_Jar->before_redirect_check($return);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore_redirect_check1()
{
    $return = m::mock(\Requests_Response::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$url instanceof \Requests_IRI) == true (line 167)

    $actual = $this->requests_Cookie_Jar->before_redirect_check($return);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
