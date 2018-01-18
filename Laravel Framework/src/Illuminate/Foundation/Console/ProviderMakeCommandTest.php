<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ProviderMakeCommand;
use Mockery as m;

class ProviderMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ProviderMakeCommand
*/
protected $providerMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->providerMakeCommand = new \Illuminate\Foundation\Console\ProviderMakeCommand();
}
}
