<?php

namespace tests\GuzzleHttp\Cookie;

use GuzzleHttp\Cookie\SessionCookieJar;
use Mockery as m;

class SessionCookieJarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sessionKey = null;
/**
* @var mixed
*/
protected $_storeSessionCookies = null;
/**
* @var \GuzzleHttp\Cookie\SessionCookieJar
*/
protected $sessionCookieJar;

public function setUp()
{
    parent::setUp();

    $this->_sessionKey = null;
    $this->_storeSessionCookies = null;
    $this->sessionCookieJar = new \GuzzleHttp\Cookie\SessionCookieJar($this->_sessionKey, $this->_storeSessionCookies);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionCookieJar->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionCookieJar->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == false (line 46)

    $actual = $this->sessionCookieJar->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\GuzzleHttp\Cookie\CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) == true (line 46)

    $actual = $this->sessionCookieJar->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
