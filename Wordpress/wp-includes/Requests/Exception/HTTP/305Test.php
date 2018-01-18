<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_305;

class Requests_Exception_HTTP_305Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Exception_HTTP_305
*/
protected $requests_Exception_HTTP_305;

public function setUp()
{
    parent::setUp();

    $this->requests_Exception_HTTP_305 = new \Requests_Exception_HTTP_305();
}
}
