<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\WtfCommand;

class WtfCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\WtfCommand
*/
protected $wtfCommand;

public function setUp()
{
    parent::setUp();

    $this->wtfCommand = new \Psy\Command\WtfCommand();
}

public function testSetContext0()
{
    $context = m::mock(\Psy\Context::class);

    // TODO: Your mock expectations here

    $actual = $this->wtfCommand->setContext($context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
