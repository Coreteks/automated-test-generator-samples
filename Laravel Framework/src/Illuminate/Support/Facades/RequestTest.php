<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Request;
use Mockery as m;

class RequestTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Request
*/
protected $request;

public function setUp()
{
    parent::setUp();

    $this->request = new \Illuminate\Support\Facades\Request();
}
}
