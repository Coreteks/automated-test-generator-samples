<?php

namespace tests\Illuminate\Queue\Jobs;

use Illuminate\Queue\Jobs\JobName;
use Mockery as m;

class JobNameTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Jobs\JobName
*/
protected $jobName;

public function setUp()
{
    parent::setUp();

    $this->jobName = new \Illuminate\Queue\Jobs\JobName();
}

public function testParse0()
{
    $job = m::mock('UntypedParameter_job_');

    // TODO: Your mock expectations here

    $actual = $this->jobName->parse($job);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    $name = m::mock('UntypedParameter_name_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($payload['displayName'])) == false (line 29)

    $actual = $this->jobName->resolve($name, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    $name = m::mock('UntypedParameter_name_');
    $payload = m::mock('UntypedParameter_payload_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($payload['displayName'])) == true (line 29)

    $actual = $this->jobName->resolve($name, $payload);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
