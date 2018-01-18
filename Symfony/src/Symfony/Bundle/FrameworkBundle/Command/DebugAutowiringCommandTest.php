<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand;

class DebugAutowiringCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
*/
protected $debugAutowiringCommand;

public function setUp()
{
    parent::setUp();

    $this->debugAutowiringCommand = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand();
}
}
