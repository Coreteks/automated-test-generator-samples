<?php

namespace tests;

use Mockery as m;
use WP_HTTP_Proxy;

class WP_HTTP_ProxyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_HTTP_Proxy
*/
protected $wP_HTTP_Proxy;

public function setUp()
{
    parent::setUp();

    $this->wP_HTTP_Proxy = new \WP_HTTP_Proxy();
}

public function testIs_enabled0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Proxy->is_enabled();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUse_authentication0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Proxy->use_authentication();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHost0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_HOST')) == false (line 80)

    $actual = $this->wP_HTTP_Proxy->host();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHost1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_HOST')) == true (line 80)

    $actual = $this->wP_HTTP_Proxy->host();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPort0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_PORT')) == false (line 95)

    $actual = $this->wP_HTTP_Proxy->port();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPort1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_PORT')) == true (line 95)

    $actual = $this->wP_HTTP_Proxy->port();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsername0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_USERNAME')) == false (line 110)

    $actual = $this->wP_HTTP_Proxy->username();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsername1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_USERNAME')) == true (line 110)

    $actual = $this->wP_HTTP_Proxy->username();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPassword0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_PASSWORD')) == false (line 125)

    $actual = $this->wP_HTTP_Proxy->password();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPassword1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('WP_PROXY_PASSWORD')) == true (line 125)

    $actual = $this->wP_HTTP_Proxy->password();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthentication0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Proxy->authentication();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthentication_header0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_HTTP_Proxy->authentication_header();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy0()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == false (line 211)
    // if (!empty($wildcard_regex)) == false (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy1()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == false (line 211)
    // if (!empty($wildcard_regex)) == true (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy2()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == false (line 214)
    // if (!empty($wildcard_regex)) == false (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy3()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == false (line 214)
    // if (!empty($wildcard_regex)) == true (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy4()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == true (line 214)
    // if (!empty($wildcard_regex)) == false (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy5()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == true (line 214)
    // if (!empty($wildcard_regex)) == true (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy6()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == true (line 214)
    // if (!empty($wildcard_regex)) == false (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy7()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == false (line 205)
    // if (\null === $bypass_hosts) == true (line 211)
    // if (\false !== \strpos(\WP_PROXY_BYPASS_HOSTS, '*')) == true (line 214)
    // if (!empty($wildcard_regex)) == true (line 223)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy8()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == false (line 201)
    // if (!\defined('WP_PROXY_BYPASS_HOSTS')) == true (line 205)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy9()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == false (line 197)
    // if ('localhost' == $check['host'] || isset($home['host']) && $home['host'] == $check['host']) == true (line 201)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy10()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == false (line 177)
    // if (!\is_null($result)) == true (line 197)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend_through_proxy11()
{
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($check === \false) == true (line 177)

    $actual = $this->wP_HTTP_Proxy->send_through_proxy($uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
