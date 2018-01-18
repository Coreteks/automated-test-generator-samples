<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\BaseCommand;
use Mockery as m;

class BaseCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Console\Migrations\BaseCommand
*/
protected $baseCommand;

public function setUp()
{
    parent::setUp();

    $this->baseCommand = new \Illuminate\Database\Console\Migrations\BaseCommand();
}
}
