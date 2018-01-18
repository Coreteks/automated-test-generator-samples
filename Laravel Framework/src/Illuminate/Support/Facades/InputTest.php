<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Input;
use Mockery as m;

class InputTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Input
*/
protected $input;

public function setUp()
{
    parent::setUp();

    $this->input = new \Illuminate\Support\Facades\Input();
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->input->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
