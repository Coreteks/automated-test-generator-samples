<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\TestMakeCommand;
use Mockery as m;

class TestMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\TestMakeCommand
*/
protected $testMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->testMakeCommand = new \Illuminate\Foundation\Console\TestMakeCommand();
}
}
