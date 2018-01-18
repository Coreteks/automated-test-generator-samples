<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\MaxAttemptsExceededException;
use Mockery as m;

class MaxAttemptsExceededExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\MaxAttemptsExceededException
*/
protected $maxAttemptsExceededException;

public function setUp()
{
    parent::setUp();

    $this->maxAttemptsExceededException = new \Illuminate\Queue\MaxAttemptsExceededException();
}
}
