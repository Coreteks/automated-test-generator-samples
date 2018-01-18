<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_400;

class Requests_Exception_HTTP_400Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_400
*/
protected $requests_Exception_HTTP_400;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_400 = new \Requests_Exception_HTTP_400();
}
}
