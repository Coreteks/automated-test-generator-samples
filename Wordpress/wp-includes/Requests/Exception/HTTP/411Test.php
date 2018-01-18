<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_411;

class Requests_Exception_HTTP_411Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_411
*/
protected $requests_Exception_HTTP_411;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_411 = new \Requests_Exception_HTTP_411();
}
}
