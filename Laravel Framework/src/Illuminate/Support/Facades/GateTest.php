<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Gate;
use Mockery as m;

class GateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Gate
*/
protected $gate;

public function setUp()
{
    parent::setUp();

    $this->gate = new \Illuminate\Support\Facades\Gate();
}
}
