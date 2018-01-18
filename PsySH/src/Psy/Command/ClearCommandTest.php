<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ClearCommand;

class ClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\ClearCommand
*/
protected $clearCommand;

public function setUp()
{
    parent::setUp();

    $this->clearCommand = new \Psy\Command\ClearCommand();
}
}
