<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_405;

class Requests_Exception_HTTP_405Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_405
*/
protected $requests_Exception_HTTP_405;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_405 = new \Requests_Exception_HTTP_405();
}
}
