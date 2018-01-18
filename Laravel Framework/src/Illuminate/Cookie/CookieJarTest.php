<?php

namespace tests\Illuminate\Cookie;

use Illuminate\Cookie\CookieJar;
use Mockery as m;

class CookieJarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cookie\CookieJar
*/
protected $cookieJar;

public function setUp()
{
    parent::setUp();

    $this->cookieJar = new \Illuminate\Cookie\CookieJar();
}

public function testMake0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $minutes = m::mock('UntypedParameter_minutes_');
    $path = m::mock('UntypedParameter_path_');
    $domain = m::mock('UntypedParameter_domain_');
    $secure = m::mock('UntypedParameter_secure_');
    $httpOnly = m::mock('UntypedParameter_httpOnly_');
    $raw = m::mock('UntypedParameter_raw_');
    $sameSite = m::mock('UntypedParameter_sameSite_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForever0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');
    $path = m::mock('UntypedParameter_path_');
    $domain = m::mock('UntypedParameter_domain_');
    $secure = m::mock('UntypedParameter_secure_');
    $httpOnly = m::mock('UntypedParameter_httpOnly_');
    $raw = m::mock('UntypedParameter_raw_');
    $sameSite = m::mock('UntypedParameter_sameSite_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $name = m::mock('UntypedParameter_name_');
    $path = m::mock('UntypedParameter_path_');
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->forget($name, $path, $domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasQueued0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->hasQueued($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueued0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->queued($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue0()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (head($parameters) instanceof \Symfony\Component\HttpFoundation\Cookie) == false (line 134)

    $actual = $this->cookieJar->queue($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQueue1()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (head($parameters) instanceof \Symfony\Component\HttpFoundation\Cookie) == true (line 134)

    $actual = $this->cookieJar->queue($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnqueue0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->unqueue($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultPathAndDomain0()
{
    $path = m::mock('UntypedParameter_path_');
    $domain = m::mock('UntypedParameter_domain_');
    $secure = m::mock('UntypedParameter_secure_');
    $sameSite = m::mock('UntypedParameter_sameSite_');

    // TODO: Your mock expectations here

    $actual = $this->cookieJar->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueuedCookies0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieJar->getQueuedCookies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
