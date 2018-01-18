<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_501;

class Requests_Exception_HTTP_501Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_501
*/
protected $requests_Exception_HTTP_501;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_501 = new \Requests_Exception_HTTP_501();
}
}
