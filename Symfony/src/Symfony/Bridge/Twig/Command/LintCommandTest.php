<?php

namespace tests\Symfony\Bridge\Twig\Command;

use Mockery as m;
use Symfony\Bridge\Twig\Command\LintCommand;
use Twig\Environment;

class LintCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_twig;
/**
* @var \Symfony\Bridge\Twig\Command\LintCommand
*/
protected $lintCommand;

public function setUp()
{
    parent::setUp();

    $this->_twig = m::mock(\Twig\Environment::class);
    $this->lintCommand = new \Symfony\Bridge\Twig\Command\LintCommand($this->_twig);
}
}
