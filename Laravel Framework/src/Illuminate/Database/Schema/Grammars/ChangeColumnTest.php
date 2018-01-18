<?php

namespace tests\Illuminate\Database\Schema\Grammars;

use Illuminate\Database\Schema\Grammars\ChangeColumn;
use Mockery as m;

class ChangeColumnTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Schema\Grammars\ChangeColumn
*/
protected $changeColumn;

public function setUp()
{
    parent::setUp();

    $this->changeColumn = new \Illuminate\Database\Schema\Grammars\ChangeColumn();
}

public function testCompile0()
{
    $grammar = m::mock('UntypedParameter_grammar_');
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$connection->isDoctrineAvailable()) == false (line 29)
    // if ($tableDiff !== false) == false (line 40)

    $actual = $this->changeColumn->compile($grammar, $blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $grammar = m::mock('UntypedParameter_grammar_');
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$connection->isDoctrineAvailable()) == false (line 29)
    // if ($tableDiff !== false) == true (line 40)

    $actual = $this->changeColumn->compile($grammar, $blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCompile2()
{
    $grammar = m::mock('UntypedParameter_grammar_');
    $blueprint = m::mock(\Illuminate\Database\Schema\Blueprint::class);
    $command = m::mock(\Illuminate\Support\Fluent::class);
    $connection = m::mock(\Illuminate\Database\Connection::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$connection->isDoctrineAvailable()) == true (line 29)
    // throw new \RuntimeException(sprintf('Changing columns for table "%s" requires Doctrine DBAL; install "doctrine/dbal".', $blueprint->getTable())) -> exception (line 30)

    $actual = $this->changeColumn->compile($grammar, $blueprint, $command, $connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
