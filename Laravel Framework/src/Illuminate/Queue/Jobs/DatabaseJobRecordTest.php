<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Queue\Jobs\DatabaseJobRecord;
use Mockery as m;

class DatabaseJobRecordTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_record = null;
/**
* @var \Illuminate\Queue\Jobs\DatabaseJobRecord
*/
protected $databaseJobRecord;

public function setUp()
{
    parent::setUp();

    $this->_record = null;
    $this->databaseJobRecord = new \Illuminate\Queue\Jobs\DatabaseJobRecord($this->_record);
}

public function testIncrement0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJobRecord->increment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTouch0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseJobRecord->touch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->databaseJobRecord->__get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
