<?php

namespace tests;

use CI_Controller;
use Mockery as m;

class CI_ControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Controller
*/
protected $cI_Controller;

public function setUp()
{
    parent::setUp();

    $this->cI_Controller = new \CI_Controller();
}

public function testGet_instance0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Controller->get_instance();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
