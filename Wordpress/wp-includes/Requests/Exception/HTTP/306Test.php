<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_306;

class Requests_Exception_HTTP_306Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_306
*/
protected $requests_Exception_HTTP_306;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_306 = new \Requests_Exception_HTTP_306();
}
}
