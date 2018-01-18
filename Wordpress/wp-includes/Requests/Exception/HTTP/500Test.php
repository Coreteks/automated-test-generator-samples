<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_500;

class Requests_Exception_HTTP_500Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_500
*/
protected $requests_Exception_HTTP_500;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_500 = new \Requests_Exception_HTTP_500();
}
}
