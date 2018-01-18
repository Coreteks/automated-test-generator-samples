<?php

namespace tests\Illuminate\Database\Console\Factories;

use Illuminate\Database\Console\Factories\FactoryMakeCommand;
use Mockery as m;

class FactoryMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Console\Factories\FactoryMakeCommand
*/
protected $factoryMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->factoryMakeCommand = new \Illuminate\Database\Console\Factories\FactoryMakeCommand();
}
}
