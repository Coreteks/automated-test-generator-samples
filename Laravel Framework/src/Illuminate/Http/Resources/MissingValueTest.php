<?php

namespace tests\Illuminate\Http\Resources;

use Illuminate\Http\Resources\MissingValue;
use Mockery as m;

class MissingValueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Http\Resources\MissingValue
*/
protected $missingValue;

public function setUp()
{
    parent::setUp();

    $this->missingValue = new \Illuminate\Http\Resources\MissingValue();
}

public function testIsMissing0()
{
    // TODO: Your mock expectations here

    $actual = $this->missingValue->isMissing();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
