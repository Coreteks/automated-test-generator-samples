<?php

namespace tests\Illuminate\Console\Events;

use Illuminate\Console\Events\CommandFinished;
use Mockery as m;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandFinishedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_command = null;
/**
* @var \Mockery\MockInterface
*/
protected $_input;
/**
* @var \Mockery\MockInterface
*/
protected $_output;
/**
* @var mixed
*/
protected $_exitCode = null;
/**
* @var \Illuminate\Console\Events\CommandFinished
*/
protected $commandFinished;

public function setUp()
{
    parent::setUp();

    $this->_command = null;
    $this->_input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $this->_output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);
    $this->_exitCode = null;
    $this->commandFinished = new \Illuminate\Console\Events\CommandFinished($this->_command, $this->_input, $this->_output, $this->_exitCode);
}
}
