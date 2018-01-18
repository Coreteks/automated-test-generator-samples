<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Foundation\Inspiring;
use Mockery as m;

class InspiringTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Inspiring
*/
protected $inspiring;

public function setUp()
{
    parent::setUp();

    $this->inspiring = new \Illuminate\Foundation\Inspiring();
}

public function testQuote0()
{
    // TODO: Your mock expectations here

    $actual = $this->inspiring->quote();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
