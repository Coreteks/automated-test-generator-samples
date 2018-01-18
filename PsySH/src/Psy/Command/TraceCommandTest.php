<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\TraceCommand;

class TraceCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Command\TraceCommand
*/
protected $traceCommand;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->traceCommand = new \Psy\Command\TraceCommand($this->_name);
}
}
