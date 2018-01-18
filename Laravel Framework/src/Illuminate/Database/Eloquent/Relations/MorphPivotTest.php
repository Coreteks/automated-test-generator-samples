<?php

namespace tests\Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Mockery as m;

class MorphPivotTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\Relations\MorphPivot
*/
protected $morphPivot;

public function setUp()
{
    parent::setUp();

    $this->morphPivot = new \Illuminate\Database\Eloquent\Relations\MorphPivot();
}

public function testDelete0()
{
    // TODO: Your mock expectations here

    $actual = $this->morphPivot->delete();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMorphType0()
{
    $morphType = m::mock('UntypedParameter_morphType_');

    // TODO: Your mock expectations here

    $actual = $this->morphPivot->setMorphType($morphType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetMorphClass0()
{
    $morphClass = m::mock('UntypedParameter_morphClass_');

    // TODO: Your mock expectations here

    $actual = $this->morphPivot->setMorphClass($morphClass);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
