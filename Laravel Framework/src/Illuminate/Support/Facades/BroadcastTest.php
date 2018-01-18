<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Broadcast;
use Mockery as m;

class BroadcastTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Broadcast
*/
protected $broadcast;

public function setUp()
{
    parent::setUp();

    $this->broadcast = new \Illuminate\Support\Facades\Broadcast();
}
}
