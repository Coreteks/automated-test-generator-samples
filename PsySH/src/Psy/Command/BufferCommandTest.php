<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\BufferCommand;

class BufferCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\BufferCommand
*/
protected $bufferCommand;

public function setUp()
{
    parent::setUp();

    $this->bufferCommand = new \Psy\Command\BufferCommand();
}
}
