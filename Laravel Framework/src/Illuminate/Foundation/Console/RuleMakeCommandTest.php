<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\RuleMakeCommand;
use Mockery as m;

class RuleMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\RuleMakeCommand
*/
protected $ruleMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->ruleMakeCommand = new \Illuminate\Foundation\Console\RuleMakeCommand();
}
}
