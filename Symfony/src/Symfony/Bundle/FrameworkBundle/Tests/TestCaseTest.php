<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class TestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\TestCase
*/
protected $testCase;

public function setUp()
{
    parent::setUp();

    $this->testCase = new \Symfony\Bundle\FrameworkBundle\Tests\TestCase();
}
}
