<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Crypt;
use Mockery as m;

class CryptTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Crypt
*/
protected $crypt;

public function setUp()
{
    parent::setUp();

    $this->crypt = new \Illuminate\Support\Facades\Crypt();
}
}
