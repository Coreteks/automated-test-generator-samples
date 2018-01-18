<?php

namespace tests;

use CI_Input;
use CI_Security;
use Mockery as m;

class CI_InputTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_security;
/**
* @var \CI_Input
*/
protected $cI_Input;

public function setUp()
{
    parent::setUp();

    $this->_security = m::mock(\CI_Security::class);
    $this->cI_Input = new \CI_Input($this->_security);
}

public function testGet0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->get($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPost0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->post($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPost_get0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->post_get($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_post0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->get_post($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCookie0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->cookie($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testServer0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->server($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInput_stream0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->_input_stream)) == false (line 279)

    $actual = $this->cI_Input->input_stream($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInput_stream1()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_array($this->_input_stream)) == true (line 279)

    $actual = $this->cI_Input->input_stream($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie1()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie2()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie3()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie4()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie5()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie6()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie7()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie8()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie9()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie10()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie11()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie12()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie13()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie14()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie15()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == false (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie16()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie17()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie18()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie19()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie20()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie21()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie22()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie23()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie24()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie25()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie26()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie27()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie28()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie29()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie30()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie31()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie32()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie33()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie34()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie35()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie36()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie37()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie38()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie39()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie40()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie41()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie42()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie43()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie44()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie45()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie46()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie47()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == false (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie48()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie49()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie50()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie51()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie52()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie53()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie54()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie55()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == false (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie56()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie57()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie58()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie59()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == false (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie60()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie61()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == false (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie62()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == false (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_cookie63()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $expire = m::mock('UntypedParameter_expire_');
    $domain = m::mock('UntypedParameter_domain_');
    $path = m::mock('UntypedParameter_path_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $secure = m::mock('UntypedParameter_secure_');
    $httponly = m::mock('UntypedParameter_httponly_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($name)) == true (line 309)
    // if (isset($name[$item])) == true (line 314)
    // if ($prefix === '' && \config_item('cookie_prefix') !== '') == true (line 321)
    // if ($domain == '' && \config_item('cookie_domain') != '') == true (line 326)
    // if ($path === '/' && \config_item('cookie_path') !== '/') == true (line 331)
    // if (!\is_numeric($expire) or $expire < 0) == true (line 344)

    $actual = $this->cI_Input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == false (line 380)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == false (line 380)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address147()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address148()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address149()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address150()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address151()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address152()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address153()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address154()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address155()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address156()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address157()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address158()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address159()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address160()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address161()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address162()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address163()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address164()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address165()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address166()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address167()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address168()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address169()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address170()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address171()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address172()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address173()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address174()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address175()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address176()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address177()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address178()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address179()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address180()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address181()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address182()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address183()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address184()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address185()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address186()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address187()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address188()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address189()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address190()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address191()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address192()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address193()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address194()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address195()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address196()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address197()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address198()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address199()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address200()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address201()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address202()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address203()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address204()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address205()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address206()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address207()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address208()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address209()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address210()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address211()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address212()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address213()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address214()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address215()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address216()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address217()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address218()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address219()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address220()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address221()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address222()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address223()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address224()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address225()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address226()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address227()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address228()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address229()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address230()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address231()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address232()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address233()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == false (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address234()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == false (line 380)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address235()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == false (line 380)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address236()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address237()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address238()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address239()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address240()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address241()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address242()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address243()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address244()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address245()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address246()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address247()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address248()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address249()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address250()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address251()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address252()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address253()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address254()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address255()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address256()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address257()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address258()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address259()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address260()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address261()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address262()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address263()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address264()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address265()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address266()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address267()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address268()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address269()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address270()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address271()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address272()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address273()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address274()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address275()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address276()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address277()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address278()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address279()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address280()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address281()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address282()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address283()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address284()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address285()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address286()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address287()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address288()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address289()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address290()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address291()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address292()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address293()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address294()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address295()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address296()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address297()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address298()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address299()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address300()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address301()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address302()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address303()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address304()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address305()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address306()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address307()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address308()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address309()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address310()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address311()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address312()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address313()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address314()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address315()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address316()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address317()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address318()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address319()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address320()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address321()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address322()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address323()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address324()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address325()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address326()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address327()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address328()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address329()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address330()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address331()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address332()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address333()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address334()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address335()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address336()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address337()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address338()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address339()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address340()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address341()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address342()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address343()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address344()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address345()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address346()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address347()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address348()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address349()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address350()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address351()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == false (line 384)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address352()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address353()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address354()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address355()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address356()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address357()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address358()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address359()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address360()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address361()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address362()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address363()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address364()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address365()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address366()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address367()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address368()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address369()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address370()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address371()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address372()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address373()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address374()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address375()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address376()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address377()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address378()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address379()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address380()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address381()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address382()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address383()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address384()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address385()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address386()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address387()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address388()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address389()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address390()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address391()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address392()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address393()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address394()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address395()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address396()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address397()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address398()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address399()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address400()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address401()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address402()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address403()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address404()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address405()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address406()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address407()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address408()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address409()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == false (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address410()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address411()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == false (line 402)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address412()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address413()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address414()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address415()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address416()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address417()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address418()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address419()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address420()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address421()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address422()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address423()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address424()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address425()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == false (line 430)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address426()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address427()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address428()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address429()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address430()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address431()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address432()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address433()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address434()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address435()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address436()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address437()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == false (line 432)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address438()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address439()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address440()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address441()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address442()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address443()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address444()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address445()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address446()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address447()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address448()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address449()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address450()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address451()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address452()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address453()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == false (line 462)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address454()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address455()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address456()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address457()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address458()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address459()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == false (line 476)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address460()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address461()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == false (line 424)
    // if (!isset($ip, $sprintf)) == true (line 430)
    // if ($separator === ':') == true (line 432)
    // for (...) == true (line 442)
    // for (...) == false (line 442)
    // if ($separator === ':') == true (line 462)
    // for (...) == true (line 465)
    // for (...) == false (line 465)
    // if (\strncmp($ip, \vsprintf($sprintf, $netaddr), $masklen) === 0) == true (line 476)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address462()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address463()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == false (line 407)
    // if (\strpos($proxy_ips[$i], $separator) === \FALSE) == true (line 424)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address464()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address465()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == false (line 411)
    // for (...) == false (line 404)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address466()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == false (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address467()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == false (line 367)
    // if (!empty($proxy_ips) && !\is_array($proxy_ips)) == true (line 373)
    // if ($proxy_ips) == true (line 380)
    // if (($spoof = $this->server($header)) !== \NULL) == true (line 384)
    // if (!$this->valid_ip($spoof)) == true (line 391)
    // if ($spoof) == true (line 402)
    // for (...) == true (line 404)
    // if (\strpos($proxy_ips[$i], '/') === \FALSE) == true (line 407)
    // if ($proxy_ips[$i] === $this->ip_address) == true (line 411)
    // if (!$this->valid_ip($this->ip_address)) == true (line 485)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIp_address468()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ip_address !== \FALSE) == true (line 367)

    $actual = $this->cI_Input->ip_address();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_ip0()
{
    $ip = m::mock('UntypedParameter_ip_');
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($which)) (line 504)
    // Case 'ipv4' == false (line 506)
    // Case 'ipv6' == false (line 509)
    // Default (line 512)

    $actual = $this->cI_Input->valid_ip($ip, $which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_ip1()
{
    $ip = m::mock('UntypedParameter_ip_');
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($which)) (line 504)
    // Case 'ipv4' == false (line 506)
    // Case 'ipv6' == true (line 509)

    $actual = $this->cI_Input->valid_ip($ip, $which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid_ip2()
{
    $ip = m::mock('UntypedParameter_ip_');
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (\strtolower($which)) (line 504)
    // Case 'ipv4' == true (line 506)

    $actual = $this->cI_Input->valid_ip($ip, $which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUser_agent0()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->user_agent($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_headers0()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->headers)) == false (line 543)
    // if (\function_exists('apache_request_headers')) == false (line 549)

    $actual = $this->cI_Input->request_headers($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_headers1()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->headers)) == false (line 543)
    // if (\function_exists('apache_request_headers')) == false (line 549)
    // if (\sscanf($key, 'HTTP_%s', $header) === 1) == false (line 559)

    $actual = $this->cI_Input->request_headers($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_headers2()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->headers)) == false (line 543)
    // if (\function_exists('apache_request_headers')) == false (line 549)
    // if (\sscanf($key, 'HTTP_%s', $header) === 1) == true (line 559)

    $actual = $this->cI_Input->request_headers($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_headers3()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->headers)) == false (line 543)
    // if (\function_exists('apache_request_headers')) == true (line 549)

    $actual = $this->cI_Input->request_headers($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequest_headers4()
{
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->headers)) == true (line 543)

    $actual = $this->cI_Input->request_headers($xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header0()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == false (line 588)
    // if (!isset($headers[$index])) == false (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header1()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == false (line 588)
    // if (!isset($headers[$index])) == true (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header2()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == true (line 588)
    // if (!isset($headers[$index])) == false (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header3()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == true (line 588)
    // if (!isset($headers[$index])) == true (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header4()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == true (line 588)
    // if (!isset($headers[$index])) == false (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_request_header5()
{
    $index = m::mock('UntypedParameter_index_');
    $xss_clean = m::mock('UntypedParameter_xss_clean_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($headers)) == true (line 588)
    // if (!isset($headers[$index])) == true (line 599)

    $actual = $this->cI_Input->get_request_header($index, $xss_clean);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_ajax_request0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Input->is_ajax_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethod0()
{
    $upper = m::mock('UntypedParameter_upper_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Input->method($upper);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'raw_input_stream') == false (line 653)
    // if ($name === 'ip_address') == false (line 658)

    $actual = $this->cI_Input->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'raw_input_stream') == false (line 653)
    // if ($name === 'ip_address') == true (line 658)

    $actual = $this->cI_Input->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name === 'raw_input_stream') == true (line 653)

    $actual = $this->cI_Input->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
