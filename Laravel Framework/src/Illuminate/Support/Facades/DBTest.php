<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\DB;
use Mockery as m;

class DBTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\DB
*/
protected $dB;

public function setUp()
{
    parent::setUp();

    $this->dB = new \Illuminate\Support\Facades\DB();
}
}
