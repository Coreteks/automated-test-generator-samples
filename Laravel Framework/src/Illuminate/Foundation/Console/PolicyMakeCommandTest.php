<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\PolicyMakeCommand;
use Mockery as m;

class PolicyMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\PolicyMakeCommand
*/
protected $policyMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->policyMakeCommand = new \Illuminate\Foundation\Console\PolicyMakeCommand();
}
}
