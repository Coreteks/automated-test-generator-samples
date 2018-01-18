<?php

namespace tests\Illuminate\Queue\Failed;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Queue\Failed\DatabaseFailedJobProvider;
use Mockery as m;

class DatabaseFailedJobProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_resolver;
/**
* @var mixed
*/
protected $_database = null;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var \Illuminate\Queue\Failed\DatabaseFailedJobProvider
*/
protected $databaseFailedJobProvider;

public function setUp()
{
    parent::setUp();

    $this->_resolver = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->_database = null;
    $this->_table = null;
    $this->databaseFailedJobProvider = new \Illuminate\Queue\Failed\DatabaseFailedJobProvider($this->_resolver, $this->_database, $this->_table);
}

public function testLog0()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $payload = m::mock('UntypedParameter_payload_');
    $exception = m::mock('UntypedParameter_exception_');

    // TODO: Your mock expectations here

    $actual = $this->databaseFailedJobProvider->log($connection, $queue, $payload, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseFailedJobProvider->all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->databaseFailedJobProvider->find($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->databaseFailedJobProvider->forget($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseFailedJobProvider->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
