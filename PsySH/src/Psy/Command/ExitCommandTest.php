<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ExitCommand;

class ExitCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ExitCommand
*/
protected $exitCommand;

public function setUp()
{
    parent::setUp();

    $this->exitCommand = new \Psy\Command\ExitCommand();
}
}
