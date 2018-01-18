<?php

namespace tests\Illuminate\Foundation\Auth;

use Illuminate\Foundation\Auth\User;
use Mockery as m;

class UserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Auth\User
*/
protected $user;

public function setUp()
{
    parent::setUp();

    $this->user = new \Illuminate\Foundation\Auth\User();
}
}
