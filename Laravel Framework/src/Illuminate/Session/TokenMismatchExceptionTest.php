<?php

namespace tests\Illuminate\Session;

use Illuminate\Session\TokenMismatchException;
use Mockery as m;

class TokenMismatchExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Session\TokenMismatchException
*/
protected $tokenMismatchException;

public function setUp()
{
    parent::setUp();

    $this->tokenMismatchException = new \Illuminate\Session\TokenMismatchException();
}
}
