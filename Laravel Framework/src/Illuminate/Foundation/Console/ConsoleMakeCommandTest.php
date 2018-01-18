<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ConsoleMakeCommand;
use Mockery as m;

class ConsoleMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ConsoleMakeCommand
*/
protected $consoleMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->consoleMakeCommand = new \Illuminate\Foundation\Console\ConsoleMakeCommand();
}
}
