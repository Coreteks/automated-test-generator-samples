<?php

namespace tests\Illuminate\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\SQLiteGrammar;
use Mockery as m;

class SQLiteGrammarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Grammars\SQLiteGrammar
*/
protected $sQLiteGrammar;

public function setUp()
{
    parent::setUp();

    $this->sQLiteGrammar = new \Illuminate\Database\Query\Grammars\SQLiteGrammar();
}

public function testCompileSelect0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query->unions) == false (line 49)

    $actual = $this->sQLiteGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileSelect1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($query->unions) == true (line 49)

    $actual = $this->sQLiteGrammar->compileSelect($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == false (line 148)
    // if (count($values) == 1) == false (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == false (line 148)
    // if (count($values) == 1) == false (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert2()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == false (line 148)
    // if (count($values) == 1) == true (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert3()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == true (line 148)
    // if (count($values) == 1) == false (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert4()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == true (line 148)
    // if (count($values) == 1) == false (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileInsert5()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array(reset($values))) == true (line 148)
    // if (count($values) == 1) == true (line 155)

    $actual = $this->sQLiteGrammar->compileInsert($query, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileTruncate0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);

    // TODO: Your mock expectations here

    $actual = $this->sQLiteGrammar->compileTruncate($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
