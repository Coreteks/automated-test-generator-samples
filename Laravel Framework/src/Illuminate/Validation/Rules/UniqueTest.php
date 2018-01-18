<?php

namespace tests\Illuminate\Validation\Rules;

use Illuminate\Validation\Rules\Unique;
use Mockery as m;

class UniqueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Validation\Rules\Unique
*/
protected $unique;

public function setUp()
{
    parent::setUp();

    $this->unique = new \Illuminate\Validation\Rules\Unique();
}

public function testIgnore0()
{
    $id = m::mock('UntypedParameter_id_');
    $idColumn = m::mock('UntypedParameter_idColumn_');

    // TODO: Your mock expectations here

    $actual = $this->unique->ignore($id, $idColumn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->unique->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
