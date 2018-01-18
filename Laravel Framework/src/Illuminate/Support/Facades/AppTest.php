<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\App;
use Mockery as m;

class AppTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\App
*/
protected $app;

public function setUp()
{
    parent::setUp();

    $this->app = new \Illuminate\Support\Facades\App();
}
}
