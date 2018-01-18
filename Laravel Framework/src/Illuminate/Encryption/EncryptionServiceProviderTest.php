<?php

namespace tests\Illuminate\Encryption;

use Illuminate\Encryption\EncryptionServiceProvider;
use Mockery as m;

class EncryptionServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Encryption\EncryptionServiceProvider
*/
protected $encryptionServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->encryptionServiceProvider = new \Illuminate\Encryption\EncryptionServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->encryptionServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
