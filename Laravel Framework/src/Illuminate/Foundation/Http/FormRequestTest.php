<?php

namespace tests\Illuminate\Foundation\Http;

use Illuminate\Foundation\Http\FormRequest;
use Mockery as m;

class FormRequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Http\FormRequest
*/
protected $formRequest;

public function setUp()
{
    parent::setUp();

    $this->formRequest = new \Illuminate\Foundation\Http\FormRequest();
}

public function testValidated0()
{
    // TODO: Your mock expectations here

    $actual = $this->formRequest->validated();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessages0()
{
    // TODO: Your mock expectations here

    $actual = $this->formRequest->messages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAttributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->formRequest->attributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRedirector0()
{
    $redirector = m::mock(\Illuminate\Routing\Redirector::class);

    // TODO: Your mock expectations here

    $actual = $this->formRequest->setRedirector($redirector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContainer0()
{
    $container = m::mock(\Illuminate\Contracts\Container\Container::class);

    // TODO: Your mock expectations here

    $actual = $this->formRequest->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
