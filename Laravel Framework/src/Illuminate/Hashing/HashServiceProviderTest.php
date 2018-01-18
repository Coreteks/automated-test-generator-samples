<?php

namespace tests\Illuminate\Hashing;

use Illuminate\Hashing\HashServiceProvider;
use Mockery as m;

class HashServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Hashing\HashServiceProvider
*/
protected $hashServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->hashServiceProvider = new \Illuminate\Hashing\HashServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->hashServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->hashServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
