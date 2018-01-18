<?php

namespace tests\Illuminate\Console\Events;

use Illuminate\Console\Events\CommandStarting;
use Mockery as m;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandStartingTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Console\Events\CommandStarting
*/
protected $commandStarting;

public function setUp()
{
    parent::setUp();

    $this->_command = null;
    $this->_input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $this->_output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);
    $this->commandStarting = new \Illuminate\Console\Events\CommandStarting($this->_command, $this->_input, $this->_output);
}
}
