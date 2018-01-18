<?php

namespace tests\Illuminate\Cookie\Middleware;

use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Mockery as m;

class EncryptCookiesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_encrypter;
/**
* @var \Illuminate\Cookie\Middleware\EncryptCookies
*/
protected $encryptCookies;

public function setUp()
{
    parent::setUp();

    $this->_encrypter = m::mock(\Illuminate\Contracts\Encryption\Encrypter::class);
    $this->encryptCookies = new \Illuminate\Cookie\Middleware\EncryptCookies($this->_encrypter);
}

public function testDisableFor0()
{
    $cookieName = m::mock('UntypedParameter_cookieName_');

    // TODO: Your mock expectations here

    $actual = $this->encryptCookies->disableFor($cookieName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->encryptCookies->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDisabled0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->encryptCookies->isDisabled($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
