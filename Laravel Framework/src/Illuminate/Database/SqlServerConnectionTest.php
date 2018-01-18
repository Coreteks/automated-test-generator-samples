<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\SqlServerConnection;
use Mockery as m;

class SqlServerConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\SqlServerConnection
*/
protected $sqlServerConnection;

public function setUp()
{
    parent::setUp();

    $this->sqlServerConnection = new \Illuminate\Database\SqlServerConnection();
}

public function testTransaction0()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 27)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction1()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction2()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)
    // throw $e -> exception (line 53)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction3()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)
    // throw $e -> exception (line 49)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction4()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction5()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)
    // throw $e -> exception (line 53)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testTransaction6()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)
    // throw $e -> exception (line 49)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransaction7()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == false (line 28)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransaction8()
{
    $callback = m::mock(\Closure::class);
    $attempts = m::mock('UntypedParameter_attempts_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 27)
    // if ($this->getDriverName() == 'sqlsrv') == true (line 28)

    $actual = $this->sqlServerConnection->transaction($callback, $attempts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == false (line 77)

    $actual = $this->sqlServerConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == true (line 77)

    $actual = $this->sqlServerConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
