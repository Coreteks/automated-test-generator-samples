<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand;

class XliffLintCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
*/
protected $xliffLintCommand;

public function setUp()
{
    parent::setUp();

    $this->xliffLintCommand = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();
}
}
