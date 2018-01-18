<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Mockery as m;

class VerifyCsrfTokenTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_app;
/**
* @var \Mockery\MockInterface
*/
protected $_encrypter;
/**
* @var \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken
*/
protected $verifyCsrfToken;

public function setUp()
{
    parent::setUp();

    $this->_app = m::mock(\Illuminate\Foundation\Application::class);
    $this->_encrypter = m::mock(\Illuminate\Contracts\Encryption\Encrypter::class);
    $this->verifyCsrfToken = new \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken($this->_app, $this->_encrypter);
}

/**
 * @expectedException \Illuminate\Session\TokenMismatchException
 */
public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isReading($request) || $this->runningUnitTests() || $this->inExceptArray($request) || $this->tokensMatch($request)) == false (line 61)
    // throw new \Illuminate\Session\TokenMismatchException() -> exception (line 70)

    $actual = $this->verifyCsrfToken->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isReading($request) || $this->runningUnitTests() || $this->inExceptArray($request) || $this->tokensMatch($request)) == true (line 61)

    $actual = $this->verifyCsrfToken->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
