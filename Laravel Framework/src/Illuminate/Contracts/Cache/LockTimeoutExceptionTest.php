<?php

namespace tests\Illuminate\Contracts\Cache;

use Illuminate\Contracts\Cache\LockTimeoutException;
use Mockery as m;

class LockTimeoutExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Contracts\Cache\LockTimeoutException
*/
protected $lockTimeoutException;

public function setUp()
{
    parent::setUp();

    $this->lockTimeoutException = new \Illuminate\Contracts\Cache\LockTimeoutException();
}
}
