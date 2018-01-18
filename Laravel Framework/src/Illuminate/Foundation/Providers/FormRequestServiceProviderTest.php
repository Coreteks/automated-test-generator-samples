<?php

namespace tests\Illuminate\Foundation\Providers;

use Illuminate\Foundation\Providers\FormRequestServiceProvider;
use Mockery as m;

class FormRequestServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Providers\FormRequestServiceProvider
*/
protected $formRequestServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->formRequestServiceProvider = new \Illuminate\Foundation\Providers\FormRequestServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->formRequestServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    $actual = $this->formRequestServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
