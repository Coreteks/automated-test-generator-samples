<?php

namespace tests\Monolog\Test;

use Mockery as m;
use Monolog\Test\TestCase;

class TestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Test\TestCase
*/
protected $testCase;

public function setUp()
{
    parent::setUp();

    $this->testCase = new \Monolog\Test\TestCase();
}
}
