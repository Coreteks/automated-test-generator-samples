<?php

namespace tests\Symfony\Bridge\PhpUnit\TextUI;

use Mockery as m;
use Symfony\Bridge\PhpUnit\TextUI\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\TextUI\Command
*/
protected $command;

public function setUp()
{
    parent::setUp();

    $this->command = new \Symfony\Bridge\PhpUnit\TextUI\Command();
}
}
