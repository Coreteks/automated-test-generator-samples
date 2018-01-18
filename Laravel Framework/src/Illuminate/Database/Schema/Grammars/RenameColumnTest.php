<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\RenameColumn;
use Mockery as m;

class RenameColumnTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\RenameColumn
*/
protected $renameColumn;

public function setUp()
{
    parent::setUp();

    $this->renameColumn = new \Illuminate\Database\Schema\Grammars\RenameColumn();
}

public function testCompile0()
{
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    $actual = $this->renameColumn->compile($grammar, $blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
