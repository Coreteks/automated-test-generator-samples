<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\DumpCommand;

class DumpCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\DumpCommand
*/
protected $dumpCommand;

public function setUp()
{
    parent::setUp();

    $this->dumpCommand = new \Psy\Command\DumpCommand();
}

public function testSetPresenter0()
{
    $presenter = m::mock(\Psy\VarDumper\Presenter::class);

    // TODO: Your mock expectations here

    $actual = $this->dumpCommand->setPresenter($presenter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
