<?php

namespace tests\Illuminate\Auth\Access;

use Illuminate\Auth\Access\AuthorizationException;
use Mockery as m;

class AuthorizationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Auth\Access\AuthorizationException
*/
protected $authorizationException;

public function setUp()
{
    parent::setUp();

    $this->authorizationException = new \Illuminate\Auth\Access\AuthorizationException();
}
}
