<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\RequestMakeCommand;
use Mockery as m;

class RequestMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\RequestMakeCommand
*/
protected $requestMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->requestMakeCommand = new \Illuminate\Foundation\Console\RequestMakeCommand();
}
}
