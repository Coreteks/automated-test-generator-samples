<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_402;

class Requests_Exception_HTTP_402Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_402
*/
protected $requests_Exception_HTTP_402;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_402 = new \Requests_Exception_HTTP_402();
}
}
