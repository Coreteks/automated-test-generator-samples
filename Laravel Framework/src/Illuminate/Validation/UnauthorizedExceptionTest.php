<?php

namespace tests\Illuminate\Validation;

use Illuminate\Validation\UnauthorizedException;
use Mockery as m;

class UnauthorizedExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\UnauthorizedException
*/
protected $unauthorizedException;

public function setUp()
{
    parent::setUp();

    $this->unauthorizedException = new \Illuminate\Validation\UnauthorizedException();
}
}
