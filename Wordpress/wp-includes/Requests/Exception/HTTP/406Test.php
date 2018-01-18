<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_406;

class Requests_Exception_HTTP_406Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_406
*/
protected $requests_Exception_HTTP_406;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_406 = new \Requests_Exception_HTTP_406();
}
}
