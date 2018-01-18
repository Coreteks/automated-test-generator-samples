<?php

namespace tests\PHPUnit\Util\PHP;

use Mockery as m;
use PHPUnit\Util\PHP\DefaultPhpProcess;

class DefaultPhpProcessTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\PHP\DefaultPhpProcess
*/
protected $defaultPhpProcess;

public function setUp()
{
    parent::setUp();

    $this->defaultPhpProcess = new \PHPUnit\Util\PHP\DefaultPhpProcess();
}

public function testRunJob0()
{
    $job = m::mock('UntypedParameter_job_');
    $settings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useTemporaryFile() || $this->stdin) == false (line 36)

    $actual = $this->defaultPhpProcess->runJob($job, $settings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunJob1()
{
    $job = m::mock('UntypedParameter_job_');
    $settings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useTemporaryFile() || $this->stdin) == true (line 36)
    // if (!($this->tempFile = \tempnam(\sys_get_temp_dir(), 'PHPUnit')) || \file_put_contents($this->tempFile, $job) === false) == false (line 37)

    $actual = $this->defaultPhpProcess->runJob($job, $settings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testRunJob2()
{
    $job = m::mock('UntypedParameter_job_');
    $settings = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->useTemporaryFile() || $this->stdin) == true (line 36)
    // if (!($this->tempFile = \tempnam(\sys_get_temp_dir(), 'PHPUnit')) || \file_put_contents($this->tempFile, $job) === false) == true (line 37)
    // throw new \PHPUnit\Framework\Exception('Unable to write temporary file') -> exception (line 39)

    $actual = $this->defaultPhpProcess->runJob($job, $settings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
