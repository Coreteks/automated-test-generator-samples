<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\PsyVersionCommand;

class PsyVersionCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\PsyVersionCommand
*/
protected $psyVersionCommand;

public function setUp()
{
    parent::setUp();

    $this->psyVersionCommand = new \Psy\Command\PsyVersionCommand();
}
}
