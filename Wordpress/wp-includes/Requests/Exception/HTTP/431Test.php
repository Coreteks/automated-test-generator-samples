<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_431;

class Requests_Exception_HTTP_431Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_431
*/
protected $requests_Exception_HTTP_431;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_431 = new \Requests_Exception_HTTP_431();
}
}
