<?php

namespace tests\Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Mockery as m;

class ModelNotFoundExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Eloquent\ModelNotFoundException
*/
protected $modelNotFoundException;

public function setUp()
{
    parent::setUp();

    $this->modelNotFoundException = new \Illuminate\Database\Eloquent\ModelNotFoundException();
}

public function testSetModel0()
{
    $model = m::mock('UntypedParameter_model_');
    $ids = m::mock('UntypedParameter_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->ids) > 0) == false (line 38)

    $actual = $this->modelNotFoundException->setModel($model, $ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetModel1()
{
    $model = m::mock('UntypedParameter_model_');
    $ids = m::mock('UntypedParameter_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($this->ids) > 0) == true (line 38)

    $actual = $this->modelNotFoundException->setModel($model, $ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetModel0()
{
    // TODO: Your mock expectations here

    $actual = $this->modelNotFoundException->getModel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIds0()
{
    // TODO: Your mock expectations here

    $actual = $this->modelNotFoundException->getIds();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
