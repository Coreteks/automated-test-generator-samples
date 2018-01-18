<?php

namespace tests\Illuminate\Queue\Failed;

use Illuminate\Queue\Failed\NullFailedJobProvider;
use Mockery as m;

class NullFailedJobProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Failed\NullFailedJobProvider
*/
protected $nullFailedJobProvider;

public function setUp()
{
    parent::setUp();

    $this->nullFailedJobProvider = new \Illuminate\Queue\Failed\NullFailedJobProvider();
}

public function testLog0()
{
    $connection = m::mock('UntypedParameter_connection_');
    $queue = m::mock('UntypedParameter_queue_');
    $payload = m::mock('UntypedParameter_payload_');
    $exception = m::mock('UntypedParameter_exception_');

    // TODO: Your mock expectations here

    $actual = $this->nullFailedJobProvider->log($connection, $queue, $payload, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->nullFailedJobProvider->all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFind0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->nullFailedJobProvider->find($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->nullFailedJobProvider->forget($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->nullFailedJobProvider->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
