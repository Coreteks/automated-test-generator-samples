<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Log;
use Mockery as m;

class LogTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Log
*/
protected $log;

public function setUp()
{
    parent::setUp();

    $this->log = new \Illuminate\Support\Facades\Log();
}
}
