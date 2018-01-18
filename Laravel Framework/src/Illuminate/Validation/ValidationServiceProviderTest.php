<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\ValidationServiceProvider;
use Mockery as m;

class ValidationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\ValidationServiceProvider
*/
protected $validationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->validationServiceProvider = new \Illuminate\Validation\ValidationServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->validationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->validationServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
