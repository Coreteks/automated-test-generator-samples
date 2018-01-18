<?php

namespace tests\Symfony\Bridge\Twig\Command;

use Mockery as m;
use Symfony\Bridge\Twig\Command\DebugCommand;
use Twig\Environment;

class DebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_twig;
/**
* @var mixed
*/
protected $_projectDir = null;
/**
* @var \Symfony\Bridge\Twig\Command\DebugCommand
*/
protected $debugCommand;

public function setUp()
{
    parent::setUp();

    $this->_twig = m::mock(\Twig\Environment::class);
    $this->_projectDir = null;
    $this->debugCommand = new \Symfony\Bridge\Twig\Command\DebugCommand($this->_twig, $this->_projectDir);
}
}
