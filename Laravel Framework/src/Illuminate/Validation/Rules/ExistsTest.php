<?php

namespace tests\Illuminate\Validation\Rules;

use Illuminate\Validation\Rules\Exists;
use Mockery as m;

class ExistsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\Rules\Exists
*/
protected $exists;

public function setUp()
{
    parent::setUp();

    $this->exists = new \Illuminate\Validation\Rules\Exists();
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->exists->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
