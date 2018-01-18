<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Password;
use Mockery as m;

class PasswordTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Password
*/
protected $password;

public function setUp()
{
    parent::setUp();

    $this->password = new \Illuminate\Support\Facades\Password();
}
}
