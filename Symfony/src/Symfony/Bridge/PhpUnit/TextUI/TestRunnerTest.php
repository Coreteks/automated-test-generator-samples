<?php

namespace tests\Symfony\Bridge\PhpUnit\TextUI;

use Mockery as m;
use Symfony\Bridge\PhpUnit\TextUI\TestRunner;

class TestRunnerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\TextUI\TestRunner
*/
protected $testRunner;

public function setUp()
{
    parent::setUp();

    $this->testRunner = new \Symfony\Bridge\PhpUnit\TextUI\TestRunner();
}
}
