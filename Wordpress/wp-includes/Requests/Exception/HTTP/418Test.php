<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_418;

class Requests_Exception_HTTP_418Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_418
*/
protected $requests_Exception_HTTP_418;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_418 = new \Requests_Exception_HTTP_418();
}
}
