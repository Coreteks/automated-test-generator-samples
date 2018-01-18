<?php

namespace tests;

use CI_Model;
use Mockery as m;

class CI_ModelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Model
*/
protected $cI_Model;

public function setUp()
{
    parent::setUp();

    $this->cI_Model = new \CI_Model();
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Model->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
