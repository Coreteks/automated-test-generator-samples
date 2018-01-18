<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ThrowUpCommand;

class ThrowUpCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ThrowUpCommand
*/
protected $throwUpCommand;

public function setUp()
{
    parent::setUp();

    $this->throwUpCommand = new \Psy\Command\ThrowUpCommand();
}

public function testSetContext0()
{
    $context = m::mock(\Psy\Context::class);

    // TODO: Your mock expectations here

    $actual = $this->throwUpCommand->setContext($context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
