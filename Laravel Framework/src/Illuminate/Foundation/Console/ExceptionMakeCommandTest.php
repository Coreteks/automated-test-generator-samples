<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ExceptionMakeCommand;
use Mockery as m;

class ExceptionMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ExceptionMakeCommand
*/
protected $exceptionMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->exceptionMakeCommand = new \Illuminate\Foundation\Console\ExceptionMakeCommand();
}
}
