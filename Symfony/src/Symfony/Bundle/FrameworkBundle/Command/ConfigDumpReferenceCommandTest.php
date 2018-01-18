<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand;

class ConfigDumpReferenceCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
*/
protected $configDumpReferenceCommand;

public function setUp()
{
    parent::setUp();

    $this->configDumpReferenceCommand = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();
}
}
