<?php

namespace tests\Illuminate\Database\Schema;

use Illuminate\Database\Schema\SqlServerBuilder;
use Mockery as m;

class SqlServerBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\SqlServerBuilder
*/
protected $sqlServerBuilder;

public function setUp()
{
    parent::setUp();

    $this->sqlServerBuilder = new \Illuminate\Database\Schema\SqlServerBuilder();
}

public function testDropAllTables0()
{
    // TODO: Your mock expectations here

    $actual = $this->sqlServerBuilder->dropAllTables();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
