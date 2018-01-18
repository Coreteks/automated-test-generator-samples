<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\BroadcastException;
use Mockery as m;

class BroadcastExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Broadcasting\BroadcastException
*/
protected $broadcastException;

public function setUp()
{
    parent::setUp();

    $this->broadcastException = new \Illuminate\Broadcasting\BroadcastException();
}
}
