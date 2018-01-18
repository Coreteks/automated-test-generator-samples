<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\RetryCommand;
use Mockery as m;

class RetryCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Console\RetryCommand
*/
protected $retryCommand;

public function setUp()
{
    parent::setUp();

    $this->retryCommand = new \Illuminate\Queue\Console\RetryCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->retryCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($job)) == false (line 34)

    $actual = $this->retryCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($job)) == true (line 34)

    $actual = $this->retryCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
