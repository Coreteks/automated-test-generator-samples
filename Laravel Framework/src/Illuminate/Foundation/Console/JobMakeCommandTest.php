<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\JobMakeCommand;
use Mockery as m;

class JobMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\JobMakeCommand
*/
protected $jobMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->jobMakeCommand = new \Illuminate\Foundation\Console\JobMakeCommand();
}
}
