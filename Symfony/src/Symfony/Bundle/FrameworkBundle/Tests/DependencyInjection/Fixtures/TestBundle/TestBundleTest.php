<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\TestBundle;

class TestBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\TestBundle
*/
protected $testBundle;

public function setUp()
{
    parent::setUp();

    $this->testBundle = new \Symfony\Bundle\FrameworkBundle\Tests\TestBundle();
}
}
