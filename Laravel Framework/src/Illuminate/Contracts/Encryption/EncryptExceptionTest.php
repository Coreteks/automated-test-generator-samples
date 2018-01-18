<?php

namespace tests\Illuminate\Contracts\Encryption;

use Illuminate\Contracts\Encryption\EncryptException;
use Mockery as m;

class EncryptExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Encryption\EncryptException
*/
protected $encryptException;

public function setUp()
{
    parent::setUp();

    $this->encryptException = new \Illuminate\Contracts\Encryption\EncryptException();
}
}
