<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\DocCommand;

class DocCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\DocCommand
*/
protected $docCommand;

public function setUp()
{
    parent::setUp();

    $this->docCommand = new \Psy\Command\DocCommand();
}
}
