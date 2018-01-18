<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\WhereamiCommand;

class WhereamiCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_colorMode = null;
/**
* @var \Psy\Command\WhereamiCommand
*/
protected $whereamiCommand;

public function setUp()
{
    parent::setUp();

    $this->_colorMode = null;
    $this->whereamiCommand = new \Psy\Command\WhereamiCommand($this->_colorMode);
}
}
