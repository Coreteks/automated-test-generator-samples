<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\Connection;
use Mockery as m;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_pdo = null;
/**
* @var mixed
*/
protected $_database = null;
/**
* @var mixed
*/
protected $_tablePrefix = null;
/**
* @var array
*/
protected $_config = [];
/**
* @var \Illuminate\Database\Connection
*/
protected $connection;

public function setUp()
{
    parent::setUp();

    $this->_pdo = null;
    $this->_database = null;
    $this->_tablePrefix = null;
    $this->_config = [];
    $this->connection = new \Illuminate\Database\Connection($this->_pdo, $this->_database, $this->_tablePrefix, $this->_config);
}

public function testUseDefaultQueryGrammar0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->useDefaultQueryGrammar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseDefaultSchemaGrammar0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->useDefaultSchemaGrammar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUseDefaultPostProcessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->useDefaultPostProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == false (line 250)

    $actual = $this->connection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == true (line 250)

    $actual = $this->connection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->connection->table($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuery0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->query();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectOne0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $useReadPdo = m::mock('UntypedParameter_useReadPdo_');

    // TODO: Your mock expectations here

    $actual = $this->connection->selectOne($query, $bindings, $useReadPdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelectFromWriteConnection0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->selectFromWriteConnection($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelect0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $useReadPdo = m::mock('UntypedParameter_useReadPdo_');

    // TODO: Your mock expectations here

    $actual = $this->connection->select($query, $bindings, $useReadPdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $useReadPdo = m::mock('UntypedParameter_useReadPdo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($record = $statement->fetch()) == false (line 369)

    $actual = $this->connection->cursor($query, $bindings, $useReadPdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCursor1()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $useReadPdo = m::mock('UntypedParameter_useReadPdo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($record = $statement->fetch()) == true (line 369)
    // while ($record = $statement->fetch()) == false (line 369)

    $actual = $this->connection->cursor($query, $bindings, $useReadPdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->insert($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpdate0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->update($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->delete($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStatement0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->statement($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffectingStatement0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->affectingStatement($query, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnprepared0()
{
    $query = m::mock('UntypedParameter_query_');

    // TODO: Your mock expectations here

    $actual = $this->connection->unprepared($query);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPretend0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->pretend($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindValues0()
{
    $statement = m::mock('UntypedParameter_statement_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->bindValues($statement, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindValues1()
{
    $statement = m::mock('UntypedParameter_statement_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->connection->bindValues($statement, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindings0()
{
    $bindings = [];

    // TODO: Your mock expectations here

    $actual = $this->connection->prepareBindings($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindings1()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \DateTimeInterface) == false (line 594)
    // if (is_bool($value)) == false (line 596)

    $actual = $this->connection->prepareBindings($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindings2()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \DateTimeInterface) == false (line 594)
    // if (is_bool($value)) == true (line 596)

    $actual = $this->connection->prepareBindings($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBindings3()
{
    $bindings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \DateTimeInterface) == true (line 594)

    $actual = $this->connection->prepareBindings($bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogQuery0()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggingQueries) == false (line 684)

    $actual = $this->connection->logQuery($query, $bindings, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogQuery1()
{
    $query = m::mock('UntypedParameter_query_');
    $bindings = m::mock('UntypedParameter_bindings_');
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->loggingQueries) == true (line 684)

    $actual = $this->connection->logQuery($query, $bindings, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testReconnect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($this->reconnector)) == false (line 752)
    // throw new \LogicException('Lost connection and no reconnector available.') -> exception (line 756)

    $actual = $this->connection->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_callable($this->reconnector)) == true (line 752)

    $actual = $this->connection->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisconnect0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->disconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->events)) == false (line 789)

    $actual = $this->connection->listen($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListen1()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->events)) == true (line 789)

    $actual = $this->connection->listen($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRaw0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->connection->raw($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRecordsHaveBeenModified0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->recordsModified) == false (line 848)

    $actual = $this->connection->recordsHaveBeenModified($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRecordsHaveBeenModified1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->recordsModified) == true (line 848)

    $actual = $this->connection->recordsHaveBeenModified($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDoctrineAvailable0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->isDoctrineAvailable();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDoctrineColumn0()
{
    $table = m::mock('UntypedParameter_table_');
    $column = m::mock('UntypedParameter_column_');

    // TODO: Your mock expectations here

    $actual = $this->connection->getDoctrineColumn($table, $column);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDoctrineSchemaManager0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getDoctrineSchemaManager();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDoctrineConnection0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->doctrineConnection)) == false (line 894)

    $actual = $this->connection->getDoctrineConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDoctrineConnection1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->doctrineConnection)) == true (line 894)

    $actual = $this->connection->getDoctrineConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPdo0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->pdo instanceof \Closure) == false (line 914)

    $actual = $this->connection->getPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPdo1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->pdo instanceof \Closure) == true (line 914)

    $actual = $this->connection->getPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadPdo0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->transactions > 0) == false (line 928)
    // if ($this->getConfig('sticky') && $this->recordsModified) == false (line 932)
    // if ($this->readPdo instanceof \Closure) == false (line 936)

    $actual = $this->connection->getReadPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadPdo1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->transactions > 0) == false (line 928)
    // if ($this->getConfig('sticky') && $this->recordsModified) == false (line 932)
    // if ($this->readPdo instanceof \Closure) == true (line 936)

    $actual = $this->connection->getReadPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadPdo2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->transactions > 0) == false (line 928)
    // if ($this->getConfig('sticky') && $this->recordsModified) == true (line 932)

    $actual = $this->connection->getReadPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReadPdo3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->transactions > 0) == true (line 928)

    $actual = $this->connection->getReadPdo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPdo0()
{
    $pdo = m::mock('UntypedParameter_pdo_');

    // TODO: Your mock expectations here

    $actual = $this->connection->setPdo($pdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetReadPdo0()
{
    $pdo = m::mock('UntypedParameter_pdo_');

    // TODO: Your mock expectations here

    $actual = $this->connection->setReadPdo($pdo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetReconnector0()
{
    $reconnector = m::mock('UntypedParameter_reconnector_');

    // TODO: Your mock expectations here

    $actual = $this->connection->setReconnector($reconnector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfig0()
{
    $option = m::mock('UntypedParameter_option_');

    // TODO: Your mock expectations here

    $actual = $this->connection->getConfig($option);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDriverName0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getDriverName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueryGrammar0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getQueryGrammar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetQueryGrammar0()
{
    $grammar = m::mock(\Illuminate\Database\Query\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->setQueryGrammar($grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaGrammar0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getSchemaGrammar();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSchemaGrammar0()
{
    $grammar = m::mock(\Illuminate\Database\Schema\Grammars\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->setSchemaGrammar($grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPostProcessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getPostProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPostProcessor0()
{
    $processor = m::mock(\Illuminate\Database\Query\Processors\Processor::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->setPostProcessor($processor);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEventDispatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getEventDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEventDispatcher0()
{
    $events = m::mock(\Illuminate\Contracts\Events\Dispatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->setEventDispatcher($events);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPretending0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->pretending();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueryLog0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getQueryLog();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushQueryLog0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->flushQueryLog();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnableQueryLog0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->enableQueryLog();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisableQueryLog0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->disableQueryLog();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLogging0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->logging();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDatabaseName0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getDatabaseName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDatabaseName0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    $actual = $this->connection->setDatabaseName($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTablePrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->connection->getTablePrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTablePrefix0()
{
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->connection->setTablePrefix($prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithTablePrefix0()
{
    $grammar = m::mock(\Illuminate\Database\Grammar::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->withTablePrefix($grammar);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolverFor0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->connection->resolverFor($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolver0()
{
    $driver = m::mock('UntypedParameter_driver_');

    // TODO: Your mock expectations here

    $actual = $this->connection->getResolver($driver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
