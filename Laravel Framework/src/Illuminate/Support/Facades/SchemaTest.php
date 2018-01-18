<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Schema;
use Mockery as m;

class SchemaTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Schema
*/
protected $schema;

public function setUp()
{
    parent::setUp();

    $this->schema = new \Illuminate\Support\Facades\Schema();
}

public function testConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->schema->connection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
