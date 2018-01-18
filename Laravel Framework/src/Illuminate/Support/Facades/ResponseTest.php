<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Response;
use Mockery as m;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Response
*/
protected $response;

public function setUp()
{
    parent::setUp();

    $this->response = new \Illuminate\Support\Facades\Response();
}
}
