<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ShowCommand;

class ShowCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_colorMode = null;
/**
* @var \Psy\Command\ShowCommand
*/
protected $showCommand;

public function setUp()
{
    parent::setUp();

    $this->_colorMode = null;
    $this->showCommand = new \Psy\Command\ShowCommand($this->_colorMode);
}
}
