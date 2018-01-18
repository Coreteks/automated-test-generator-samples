<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\RelationNotFoundException;
use Mockery as m;

class RelationNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\RelationNotFoundException
*/
protected $relationNotFoundException;

public function setUp()
{
    parent::setUp();

    $this->relationNotFoundException = new \Illuminate\Database\Eloquent\RelationNotFoundException();
}

public function testMake0()
{
    $model = m::mock('UntypedParameter_model_');
    $relation = m::mock('UntypedParameter_relation_');

    // TODO: Your mock expectations here

    $actual = $this->relationNotFoundException->make($model, $relation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
