<?php

namespace tests\Psy\Output;

use Mockery as m;
use Psy\Output\PassthruPager;
use Symfony\Component\Console\Output\StreamOutput;

class PassthruPagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_output;
/**
* @var \Psy\Output\PassthruPager
*/
protected $passthruPager;

public function setUp()
{
    parent::setUp();

    $this->_output = m::mock(\Symfony\Component\Console\Output\StreamOutput::class);
    $this->passthruPager = new \Psy\Output\PassthruPager($this->_output);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->passthruPager->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
