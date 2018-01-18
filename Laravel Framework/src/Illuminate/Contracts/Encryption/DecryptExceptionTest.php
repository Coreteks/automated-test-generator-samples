<?php

namespace tests\Illuminate\Contracts\Encryption;

use Illuminate\Contracts\Encryption\DecryptException;
use Mockery as m;

class DecryptExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Encryption\DecryptException
*/
protected $decryptException;

public function setUp()
{
    parent::setUp();

    $this->decryptException = new \Illuminate\Contracts\Encryption\DecryptException();
}
}
