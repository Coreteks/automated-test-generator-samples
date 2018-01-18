<?php

namespace tests\Symfony\Bridge\PhpUnit\Legacy;

use Mockery as m;
use Symfony\Bridge\PhpUnit\Legacy\TestRunner;

class TestRunnerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\Legacy\TestRunner
*/
protected $testRunner;

public function setUp()
{
    parent::setUp();

    $this->testRunner = new \Symfony\Bridge\PhpUnit\Legacy\TestRunner();
}
}
