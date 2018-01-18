<?php

namespace tests\Illuminate\Queue;

use Illuminate\Queue\FailingJob;
use Mockery as m;

class FailingJobTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\FailingJob
*/
protected $failingJob;

public function setUp()
{
    parent::setUp();

    $this->failingJob = new \Illuminate\Queue\FailingJob();
}

/**
 * @expectedException \Exception
 */
public function testHandle0()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle2()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle4()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == false (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $connectionName = m::mock('UntypedParameter_connectionName_');
    $job = m::mock('UntypedParameter_job_');
    $e = m::mock('UntypedParameter_e_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($job->isDeleted()) == true (line 23)

    $actual = $this->failingJob->handle($connectionName, $job, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
