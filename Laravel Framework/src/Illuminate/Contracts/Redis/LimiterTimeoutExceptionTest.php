<?php

namespace tests\Illuminate\Contracts\Redis;

use Illuminate\Contracts\Redis\LimiterTimeoutException;
use Mockery as m;

class LimiterTimeoutExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Redis\LimiterTimeoutException
*/
protected $limiterTimeoutException;

public function setUp()
{
    parent::setUp();

    $this->limiterTimeoutException = new \Illuminate\Contracts\Redis\LimiterTimeoutException();
}
}
