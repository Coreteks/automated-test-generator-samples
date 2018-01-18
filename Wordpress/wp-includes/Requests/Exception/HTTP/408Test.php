<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_408;

class Requests_Exception_HTTP_408Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_408
*/
protected $requests_Exception_HTTP_408;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_408 = new \Requests_Exception_HTTP_408();
}
}
