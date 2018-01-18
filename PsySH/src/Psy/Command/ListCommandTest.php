<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ListCommand;

class ListCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ListCommand
*/
protected $listCommand;

public function setUp()
{
    parent::setUp();

    $this->listCommand = new \Psy\Command\ListCommand();
}

public function testSetPresenter0()
{
    $presenter = m::mock(\Psy\VarDumper\Presenter::class);

    // TODO: Your mock expectations here

    $actual = $this->listCommand->setPresenter($presenter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
