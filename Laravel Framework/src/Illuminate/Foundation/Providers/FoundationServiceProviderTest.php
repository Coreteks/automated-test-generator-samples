<?php

namespace tests\Illuminate\Foundation\Providers;

use Illuminate\Foundation\Providers\FoundationServiceProvider;
use Mockery as m;

class FoundationServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Providers\FoundationServiceProvider
*/
protected $foundationServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->foundationServiceProvider = new \Illuminate\Foundation\Providers\FoundationServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->foundationServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterRequestValidate0()
{
    // TODO: Your mock expectations here

    $actual = $this->foundationServiceProvider->registerRequestValidate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
