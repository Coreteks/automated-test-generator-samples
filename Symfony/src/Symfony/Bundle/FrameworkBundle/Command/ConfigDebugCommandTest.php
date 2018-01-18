<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand;

class ConfigDebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
*/
protected $configDebugCommand;

public function setUp()
{
    parent::setUp();

    $this->configDebugCommand = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();
}
}
