<?php

namespace tests\Symfony\Bridge\PhpUnit\Legacy;

use Mockery as m;
use Symfony\Bridge\PhpUnit\Legacy\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\Legacy\Command
*/
protected $command;

public function setUp()
{
    parent::setUp();

    $this->command = new \Symfony\Bridge\PhpUnit\Legacy\Command();
}
}
